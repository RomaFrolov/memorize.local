<?php
session_start();

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);

require_once VIEWS . "/incs/header.tpl.php";

$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();

require_once VIEWS . "/incs/category_delete.tpl.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (isset($_POST['delete_category'])) {
    $id = $_POST['id'];
    $db->query("DELETE FROM `insectcategory` WHERE `insectcategory`.`id` ='$id'");
  }
}
