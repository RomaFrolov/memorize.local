<?php
return[
    'host' => 'localhost',
    'dbname'=> 'database',
    'username'=>'root',
    'password'=>'',
    'charset'=>'utf8',
    'options'=>[
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
      ] //масив налаштувань бази данних через PDO
    
    ];