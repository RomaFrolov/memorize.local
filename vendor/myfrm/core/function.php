<?php

use myfrm\App;
use myfrm\Db;

function abort($code = 404)
{
  http_response_code($code);
  require VIEWS . "/errors/{$code}.tpl.php";
  die;
}
function load($filleble = [])
{
  $data = [];
  foreach ($_POST as $key => $value) {
    if (in_array($key, $filleble)) {
      $data[$key] = $value;
    }
  }
  return $data;
}

function db()
{
return App::get(Db::class);
}
function redirect($url = ''){
  if($url){
    $redirect = $url;
  } else{
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
  }
  header ("Location: {$redirect}");
  die;
}

function check_auth(){
  return isset($_SESSION['user']);
}
