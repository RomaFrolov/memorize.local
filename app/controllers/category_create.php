<?php

/**
 * @var Db $db
 */
require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/category_create.tpl.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['category']);


  $db->query("INSERT INTO `insectcategory` (`id`, `category`) 
          VALUES (NULL, '$name')");
}
