<?php

use myfrm\App;
use myfrm\Db;
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/login.tpl.php";

$db = App::get(Db::class);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $fillable = ['title', 'description', 'category'];

  $email = addslashes($_POST['email']);

  $password =password_hash($_POST['password'],PASSWORD_DEFAULT) ;

  // $data = load($fillable);


    if(!$user= $db->query("SELECT * FROM `users` WHERE email=?",[$email])->find()){
      $_SESSION['errors'] = 'Error email or password';

    }
    if(!password_verify($password, $user['password'])){
      $_SESSION['errors'] = 'Error email or password';

    }
    $_SESSION['Success'] = 'Autorisation success!';
    
    foreach($user as $key=>$value){
      if($key!= 'password'){
        $_SESSION['user'][$key]=$value;
      }
    }


    echo "<script>
          alert ('Login succes!!!');
          location.href ='admin';
          </script>";
  
}
print_r($_POST);