<?php
session_start();

use myfrm\App;
use myfrm\Db;
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/login.tpl.php";

$db = App::get(Db::class);

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//   $login = addslashes($_POST['login']);




//     if(!$user= $db->query("SELECT * FROM `users` WHERE `login`=?",[$login])->find()){
//       $_SESSION['errors'] = 'Error email or password';

//     }
//     if(!password_verify($password, $user['password'])){
//       $_SESSION['errors'] = 'Error email or password';

//     }
//     $_SESSION['Success'] = 'Autorisation success!';
    
//     foreach($user as $key=>$value){
//       if($key!= 'password'){
//         $_SESSION['user'][$key]=$value;
//       }
      
//     }


    
  
// }

$login = addslashes($_POST['login']);
$password = $_POST['password'];

$user= $db->query("SELECT * FROM `users` WHERE `login`=? AND `password`=?"  ,[$login, $password] )->find();
if($user['login'] === $login && $user['password'] === $password){
  $_SESSION['user'] = [
    'id'=> $user['id'],
    'login'=> $user['login'],
    'email'=> $user['email'],
  ];
  
  redirect('/admin');
  
} else{
  $_SESSION['message']= 'Невірний логіна або пароль';
  // redirect('/login');
}


