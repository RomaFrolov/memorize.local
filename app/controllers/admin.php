<?php
session_start();

// require_once PUBLICS ."/index.php";
// if(!check_auth()){
//   redirect('/');
// }

if(isset($_SESSION['user'])){
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/admin.tpl.php";
} else{
  redirect('/registr');
}
