<?php
session_start();

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);

$author =null;
if(isset($_SESSION['user'])){
  $author = $_SESSION['user']['id'];

}

require_once VIEWS . "/incs/header.tpl.php";

$category = $db->query("SELECT * FROM `insectcategory` WHERE `author`='$author' ORDER BY `insectcategory`.`category` ASC
")->findAll();

require_once VIEWS . "/incs/category_edit.tpl.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['edit_category']);

  $id = $_POST['id'];

  $db->query("UPDATE `insectcategory` SET `category` = '$name' WHERE `insectcategory`.`id` = '$id'");
}
