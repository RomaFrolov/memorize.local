<?php
session_start();

use myfrm\App;
use myfrm\Db;

require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/registr.tpl.php";

$db = App::get(Db::class);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $fillable = ['title', 'description', 'category'];
  $login = addslashes($_POST['login']);

  $email = addslashes($_POST['email']);

  $password = $_POST['password'];
  $passwordconf = $_POST['passwordconf'];
  // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  // $passwordconf = password_hash($_POST['passwordconf'], PASSWORD_DEFAULT);
  // $data = load($fillable);

  if ($password === $passwordconf) {
        $db->query("INSERT INTO `users` (`id`, `login`, `email`, `password`) 
          VALUES (?,?,?,?)", [NULL, $login, $email, $password]);

    redirect('/');
  }else{
  $_SESSION['message']= 'пароль не співпадає';
  redirect('/registr');
}
} 