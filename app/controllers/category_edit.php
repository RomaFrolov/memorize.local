<?php

/**
 * @var Db $db
 */

require_once VIEWS . "/incs/header.tpl.php";
// $name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();
require_once VIEWS . "/incs/category_edit.tpl.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['edit_category']);

  $id = $_POST['id'];

  $db->query("UPDATE `insectcategory` SET `category` = '$name' WHERE `insectcategory`.`id` = '$id'");
}
