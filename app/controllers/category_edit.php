<?php

/**
 * @var Db $db
 */
require_once PUBLICS . "/index.php";
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/admin.tpl.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['edit_category']);

  $id = $_POST['id'];

  $db->query("UPDATE `insectcategory` SET `category` = '$name' WHERE `insectcategory`.`id` = '$id'");
  

}
print_r($_POST);
require_once VIEWS . "/incs/category_edit.tpl.php";
