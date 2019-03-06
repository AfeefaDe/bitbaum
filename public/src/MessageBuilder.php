<?php

class MessageBuilder
{

    public $tvars;
    public $template_key;

    public function __construct()
    {
        // set template presets
        $this->tvars = include('../config/template_vars.php');
    }

    public function build($message_type, $template_key, $data)
    {
        // keep template key param inside class attribute
        $this->template_key = $template_key;

        // prepare placeholder data for template
        $placeholders = array_values((array)$data)[0]; // TODO: dont take all the POST data, but hey ;)

        // additional placeholders?
        switch ($this->template_key) {
            case 'test':
                $placeholders["host"] = $_SERVER['HTTP_HOST'];
                break;
        }

        if ($message_type == 'email') {
            // merge placeholder data into template
            $plainText = $this->merge('./templates/mail/' . $template_key . '.txt', $placeholders);

            // return generated message string
            return $plainText;
        } else {
            //TODO
        }
    }

    public static function merge($file, array $placeholders, $errPlaceholder = null)
    {
        // load template file
        if (file_exists($file)) {
            $string = file_get_contents($file);
        }

        // replace placeholder
        $escapeChar = '@';
        $esc = preg_quote($escapeChar);
        $expr = "/
			$esc$esc(?=$esc*+{{)
		  | $esc{
		  | {{(\w+)}}
		/x";

        $callback = function ($match) use ($placeholders, $escapeChar, $errPlaceholder) {
            switch ($match[0]) {
                case $escapeChar . $escapeChar:
                    return $escapeChar;

                case $escapeChar . '{':
                    return '{';

                default:
                    if (isset($placeholders[$match[1]])) {
                        return $placeholders[$match[1]];
                    } else {
                        return '-';
                    }
            }
        };

        return preg_replace_callback($expr, $callback, $string);
    }
}