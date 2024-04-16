<?php
use myfrm\Db;
use myfrm\Router;

require_once __DIR__ . '/../vendor/autoload.php';
require_once dirname(__DIR__) . '/config/config.php'; //файл з константами

require_once CORE . "/function.php";
require_once __DIR__ . "/bootstrap.php";

$db = \myfrm\App::get(Db::class);

// require_once CORE . "/classes/Db.php";

// $db_confiq = require CONFIG . '/db.php';
// $db = (Db::getInstance())->getConnection($db_confiq);

$router = new Router;
require_once CONFIG . '/routes.php';
$router->match();
// require_once CORE . "/router.php";  
