<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Messenger
{
    public $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->CharSet = 'UTF-8';

        // read smtp config
        $conf = parse_ini_file('config/smtpconf.ini');

        //Server settings
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = $conf['host'];  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = $conf['user'];                 // SMTP username
        $this->mail->Password = $conf['password'];                           // SMTP password
        $this->mail->SMTPSecure = $conf['security'];                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = $conf['port'];                                    // TCP port to connect to
    }

    public function sendMail($message, $template_key, $json)
    {
        // Sender
        $this->mail->setFrom($GLOBALS["tvars"]["mail"][$template_key]['from']['address'], $GLOBALS["tvars"]["mail"][$template_key]['from']['name']);
        if (isset($json['reply_to'])) $this->mail->addReplyTo($json['reply_to']);

        //Recipients
        if (isset($json['to'])) {
            $this->mail->addAddress($json['to']);     // Add a recipient
        } else if (isset($GLOBALS["tvars"]["mail"][$template_key]['to'])) {
            $addresses = explode(',', $GLOBALS["tvars"]["mail"][$template_key]['to']);
            if (count($addresses) == 1) {
                $this->mail->addAddress($addresses[0]);
            } else {
                foreach ($addresses as $i => $address) {
                    $this->mail->addBCC($address);
                }
            }
        }

        //Content
        $this->mail->isHTML(false);                                  // Set email format to HTML
        $this->mail->Subject = $GLOBALS["tvars"]["mail"][$template_key]['subject'];
        $this->mail->Body = $message;
        // $this->mail->AltBody = $message;

        // callback for result
        $this->mail->action_function = array($this, 'callbackAction');

        try {
            $this->mail->send();
            return array("code" => 201, "message" => "Message sent");
        } catch (Exception $e) {
            return array("code" => 500, "message" => "Message send failed\n" . $this->mail->ErrorInfo);
        }
    }

    public function callbackAction($result, $to, $cc, $bcc, $subject, $body)
    {
        $log;
        if ($result) {
            $log = "E-Mail sent successfully\n";
        } else {
            $log = "E-Mail send failed\n";
            $log .= $this->mail->ErrorInfo;
        }

        $log .= "Subject: \"$subject\"\n";
        foreach ($to as $address) {
            $log .= "To: {$address[1]} <{$address[0]}>\n";
        }
        foreach ($cc as $address) {
            $log .= "CC: {$address[1]} <{$address[0]}>\n";
        }
        foreach ($bcc as $toaddress) {
            $log .= "BCC: {$toaddress[1]} <{$toaddress[0]}>\n";
        }

        if ($log) error_log($log, 0);
    }

    public function sendSlack($message_payload)
    {
        // Make your message
        //  $message = array('payload' => json_encode(array('text' => $message_content)));
        $message = array('payload' => $message_payload);
        // Use curl to send your message
        $c = curl_init($GLOBALS["tvars"]["slack"]['webhook_url']);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $message);
        curl_exec($c);
        curl_close($c);
    }
}