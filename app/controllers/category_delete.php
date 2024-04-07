<?php

/**
 * @var Db $db
 */

require_once VIEWS . "/incs/header.tpl.php";

$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();

require_once VIEWS . "/incs/category_delete.tpl.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (isset($_POST['delete_category'])) {
    $id = $_POST['id'];
    $db->query("DELETE FROM `insectcategory` WHERE `insectcategory`.`id` ='$id'");
  }
}
