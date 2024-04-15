<?php
 require_once dirname(__DIR__) . '/config/config.php'; //файл з константами

require_once CORE . "/function.php";


require_once CORE . "/classes/Db.php";

$db_confiq = require CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_confiq);


require_once CORE . "/router.php";  
