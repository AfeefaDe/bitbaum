<?php
require_once 'MessageBuilder.php';
require_once 'Messenger.php';

class SupportController
{
    private static $ADMINER_BASE = "https://mysql.uberspace.de/adminer/?server=taylor.uberspace.de&username=bitbaum&db=bitbaum&edit=support_view&where%5BID%5D=";

    public static function addSupport($json)
    {
        $data = array_values((array)$json)[0];
        $data["code"] = self::genCode();
        $data["link"] = "https://" . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . "/forderungen/unterzeichnen/verify"; //TODO remove dev port

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
        ])[0];

        if ($data["code"] === $code) {

            switch ($data["state"]) {

                case SupportState::DRAFT:
                    $db->update("support", [
                        "code" => self::genCode(),
                        "state" => SupportState::VERIFIED
                    ], ['id' => $id]);

                    $data = $db->select("support", "*", ["id" => $id])[0];
                    $data['link'] = "https://" . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . "/forderungen/unterzeichnen/verify";
                    $data['link_cms'] = static::$ADMINER_BASE . $id;

                    self::sendMessage('support_publish', $data);

                    return 1; //"support verified"
                    break;

                case SupportState::VERIFIED:
                    $db->update("support", [
                        "code" => null,
                        "state" => SupportState::PUBLISHED
                    ], ['id' => $id]);

                    //TODO: send message to supporter again, in case...
                    return 2; //"support published"

                    break;
                default:
                    return 0; //error
            }
        } else {
            switch ($data["state"]) {

                case SupportState::VERIFIED:
                    return 3; //"code invalid, already verified"
                    break;

                case SupportState::PUBLISHED:
                    return 4; //"code invalid, already published"
                    break;

                default:
                    return 5; //"code invalid"
            }
        }
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