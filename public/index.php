<?php
/**
 * Demo Application
 */

define("START_TIME", microtime());
define("APP_PATH", dirname(__DIR__)."/app");

require __DIR__."/../vendor/autoload.php";

Flight::set(require APP_PATH."/config/app.php");
Flight::path(Flight::get("flight.controllers.path"));
Flight::path(Flight::get("flight.models.path"));
Flight::path(Flight::get("flight.libs.path"));

Flight::before("start", array("Controller", "init"));
Flight::start();

