<?php
 require_once dirname(__DIR__) . '/config/config.php'; //файл з константами

require_once CORE . "/function.php";


require_once CORE . "/classes/Db.php";

$db_confiq = require CONFIG . '/db.php';
$db = new Db($db_confiq);


require_once CORE . "/router.php";  