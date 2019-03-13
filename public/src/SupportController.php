<?php
require_once 'MessageBuilder.php';
require_once 'Messenger.php';

class SupportController
{
    private static $ADMINER_BASE = "https://mysql.uberspace.de/adminer/?server=taylor.uberspace.de&username=bitbaum&db=bitbaum&edit=support_view&where[ID]=";

    public static function addSupport($json)
    {
        $data = array_values((array)$json)[0];
        $data["code"] = self::genCode();
        $data["link"] = $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . "/forderungen/unterzeichnen/verify"; //TODO remove dev port

        $db = Flight::db();
        $db->insert("support", [
            "type" => 0, //TODO
            "mail" => $data["to"],
            "name" => $data["name"],
            "comment" => $data["comment"],
            "code" => $data["code"]
        ]);

        $data["id"] = $db->id();

        $status = self::sendMessage('support_validate', $data);
        Flight::halt($status['code'], $status['message']);
    }

    public static function verifySupport($id, $code)
    {
        $db = Flight::db();
        $data = $db->select("support", ["state", "code"], [
            "id" => $id
        ]);

        if ($data[0]["code"] === $code) {

            switch ($data[0]["state"]) {
                case SupportState::DRAFT:
                    //update state and generate publishing code
                    $db->update("support", [
                        "code" => self::genCode(),
                        "state" => SupportState::VERIFIED
                    ]);

                    $json = $db->select("support", "*", ["id" => $id])[0];
                    $json['link'] = $_SERVER['SERVER_ADDR'] . "/forderungen/unterzeichnen/verify";
                    $json['link_cms'] = static::$ADMINER_BASE . $id;
                    self::sendMessage('support_publish', json_decode($json));
                    return true;
                    break;
                case SupportState::VERIFIED:
                    $db->update("support", [
                        "code" => null,
                        "state" => SupportState::PUBLISHED
                    ]);

                    //TODO: send message to supporter again, in case...
                    return true;
                    break;
                default:
                    //TODO: support already published, something went wrong...
            }
        } else {
            //TODO: code didn't match
        }
        return false;
    }

    private static function sendMessage($template_key, $json)
    {
        $MessageBuilder = new MessageBuilder;
        $Messenger = new Messenger;

        $message = $MessageBuilder->build('email', $template_key, $json);
        $status = $Messenger->sendMail($message, $template_key, $json);
        return $status;
    }

    private static function genCode()
    {
        return md5(uniqid(rand(), 1));
    }
}