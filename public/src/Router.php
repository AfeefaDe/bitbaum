<?php
require_once 'MessageBuilder.php';
require_once 'Messenger.php';

class Router
{
    private $langs_permitted = ['de', 'en'];
    private $pages_permitted = ["datenschutz", "programm", "programm-frab", "impressum", "info", "ziele", "presse", "infrastruktur"];

    public function __construct()
    {
        Flight::set('flight.views.path', 'pages');
        $this->defineRoutes();
        Flight::start();
    }

    private function defineRoutes()
    {
        Flight::route('POST /forderungen/unterzeichnen', function () {

            $json = $this->validateRequest();

            $template_key = 'test';

            $MessageBuilder = new MessageBuilder;
            $Messenger = new Messenger;

            # build and send email
            $message = $MessageBuilder->build('email', $template_key, $json);
            $this->returnStatus($Messenger->sendMail($message, $template_key, $json));
        });

        Flight::route('/forderungen/unterzeichnen/verify/@code', function ($code) {

            echo "verify $code";

            //TODO redirect with status (success/ error) to overview
            //Flight::redirect('/forderungen/info/' . $this->getLang(), 303);
        });

        Flight::route('/forderungen/unterzeichner(/@id_or_lang)', function ($id_or_lang) {

            if (in_array($id_or_lang, $this->langs_permitted)) {
                $this->renderSubPage('forderungen/unterzeichner', $id_or_lang);
            } elseif (!isset($id_or_lang)) {
                Flight::redirect('/forderungen/unterzeichner/de', 303);
            } else {
                //TODO if id matches RegEx xyz, look for entry with id
                echo "show unterzeichnung id $id_or_lang";
            }

            //else: if id and lang don't exist: redirect to full list
            //Flight::redirect('/forderungen/unterzeichner/' . $this->getLang(), 303);
        });

        Flight::route('/forderungen/info/@lang', function ($lang) {
            if (!in_array($lang, $this->langs_permitted)) {
                Flight::redirect("/forderungen/info/" . $this->getLang(), 303);
            } else {
                $this->renderSubPage('forderungen/info', $lang);
            }
        });

        Flight::route('/forderungen(/@lang)', function ($lang) {
            Flight::redirect('/forderungen/info/' . $this->getLang($lang), 301);
        });

        Flight::route('/@page/@lang', function ($page, $lang) {
            if (!in_array($page, $this->pages_permitted)) {
                Flight::redirect('/' . $this->getLang($lang), 303);
            } elseif (!in_array($lang, $this->langs_permitted)) {
                Flight::redirect("/$page/" . $this->getLang(), 303);
            } else {
                $this->renderSubPage($page, $lang);
            }
        });


        Flight::route('/@page_or_lang', function ($page_or_lang) {
            if (in_array($page_or_lang, $this->langs_permitted)) {
                $this->renderRootPage($page_or_lang);
            } elseif (in_array($page_or_lang, $this->pages_permitted)) {
                Flight::redirect("/$page_or_lang/" . $this->getLang(), 303);
            } else {
                Flight::redirect('/' . $this->getLang(), 303);
            }
        });

        Flight::route('*', function () {
            Flight::redirect('/' . $this->getLang(), 303);
        });
    }

    private function validateRequest()
    {
        $this->auth();

        $this->evaluateTemplateVars();

        // check parameters
        $req_data = Flight::request()->data;
        if (count($req_data)) {
            return $req_data;
        } else {
            Flight::halt(400, 'please provide json data as required; also be sure to set "Content-Type" header to "application/json"');
            die;
        }
    }

    // read the config and evaluate the final config depending on given area etc.
    private function evaluateTemplateVars()
    {
        $all_vars = include('config/template_vars.php');
        $vars = $all_vars["default"];

        // request data
        $req_data = Flight::request()->data;

        if ($req_data->area) {
            if (isset($all_vars[$req_data->area])) {
                $vars = (array_replace_recursive($vars, $all_vars[$req_data->area]));
            }
        }

        $GLOBALS['tvars'] = $vars;
    }

    private function auth()
    {
        $conf = parse_ini_file('config/auth.ini');
        if (Flight::request()->data->key !== $conf['key']) {
            Flight::halt(401, "access denied");
            die;
        }
    }

    private function returnStatus($status)
    {
        Flight::halt($status['code'], $status['message']);
    }

    private function renderRootPage($lang = 'de')
    {
        Flight::render('start', ['lang' => $lang], 'page_content');
        Flight::render('layout', ['lang' => $lang, 'page' => 'start', 'page_type' => 'root-page']);
    }

    private function renderSubPage($page, $lang = 'de')
    {
        Flight::render($page, ['lang' => $lang], 'page_content');
        Flight::render('layout', ['lang' => $lang, 'page' => $page, 'page_type' => 'sub-page']);
    }

    private function getLang($lang = null)
    {
        if (!in_array($lang, $this->langs_permitted)) {
            $lang_ua = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
            if (in_array($lang_ua, $this->langs_permitted)) {
                $lang = $lang_ua;
            } else {
                $lang = 'de';
            }
        }
        return $lang;
    }
}