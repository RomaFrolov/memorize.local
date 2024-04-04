<?php

/**
 * @var Db $db
 */
require_once PUBLICS . "/index.php";
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/admin.tpl.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['delete_category'])) {
      $id = $_POST['id'];
      $db->query("DELETE FROM `insectcategory` WHERE `insectcategory`.`id` ='$id'");
    }
  
}
require_once VIEWS . "/incs/category_delete.tpl.php";
