<?php
session_start();

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/category_create.tpl.php";

if(isset($_SESSION['user'])){
  $author = $_SESSION['user']['id'];

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['category']);
  $author = $_SESSION['user']['id'];


  $db->query("INSERT INTO `insectcategory` (`id`, `category`,`author`) 
          VALUES (NULL, '$name','$author')");
}
