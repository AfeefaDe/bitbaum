<?php
require_once 'vendor/autoload.php';
require_once 'src/Router.php';

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header("Content-Security-Policy: default-src 'self' bits-und-baeume.org 'unsafe-inline'");

$Router = new Router;

