<?php
require 'src/MessageBuilder.php';
require 'src/Messenger.php';

class Router{

	public function __construct() {
    $this->defineRoutes();
    Flight::start();
  }
  
  public function defineRoutes() {
    
    ## >>> ##
    Flight::route('/', function(){
      $json = $this->validateRequest(true);
      echo 'bnb messaging node';
    });

    ## >>> ##
    Flight::route('POST /test', function() {
      
      $json = $this->validateRequest();
      
      $template_key = 'test';
      
      $MessageBuilder = new MessageBuilder;
      $Messenger = new Messenger;
      
      # build and send email
      $message = $MessageBuilder->build('email', $template_key, $json);
      $this->returnStatus( $Messenger->sendMail($message, $template_key, $json) );
    });

    ## >>> ##
    Flight::route('POST /register', function() {
      $json = $this->validateRequest();
      
      $template_key = 'register';
      
      $MessageBuilder = new MessageBuilder;
      $Messenger = new Messenger;

      # build and send email
      $message = $MessageBuilder->build('email', $template_key, $json);
      $this->returnStatus( $Messenger->sendMail($message, $template_key, $json) );
    });

    ## >>> ##
    Flight::route('POST /register-copy', function() {
      $json = $this->validateRequest();
      
      $template_key = 'register-copy';
      
      $MessageBuilder = new MessageBuilder;
      $Messenger = new Messenger;

      # build and send email
      $message = $MessageBuilder->build('email', $template_key, $json);
      $this->returnStatus( $Messenger->sendMail($message, $template_key, $json) );
    });
  }
  
  public function validateRequest( $skip_auth = false ) {
    // authenticate
    if ($skip_auth) return;
    // $this->auth();

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
  public function evaluateTemplateVars() {
      $all_vars = include('../config/template_vars.php');
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
  
  public function auth() {
    $conf = parse_ini_file('../config/auth.ini');
    if ( Flight::request()->data->key !== $conf['key']) {
      Flight::halt(401, "access denied");
      die;
    }
  }

  public function returnStatus( $status ) {
    Flight::halt( $status['code'], $status['message'] );
  }
}

?>