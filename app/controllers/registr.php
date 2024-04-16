<?php

use myfrm\App;
use myfrm\Db;
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/registr.tpl.php";

$db = App::get(Db::class);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $fillable = ['title', 'description', 'category'];
  $name = addslashes($_POST['name']);

  $email = addslashes($_POST['email']);

  $password =password_hash($_POST['password'],PASSWORD_DEFAULT) ;

  // $data = load($fillable);


    $db->query("INSERT INTO `users` (`id`, `login`, `email`, `password`) 
          VALUES (?,?,?,?)", [NULL,$name, $email, $password]);

    echo "<script>
          alert ('Registr succes!!!');
          location.href ='admin';
          </script>";
  
}
print_r($_POST);