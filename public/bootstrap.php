<?php

use myfrm\App;
use myfrm\Db;
use myfrm\ServiceContainer;

$container = new ServiceContainer();
$container->setService(Db::class, function(){
  $db_confiq = require CONFIG . '/db.php';
  return (Db::getInstance())->getConnection($db_confiq);
});
App::setContainer($container);