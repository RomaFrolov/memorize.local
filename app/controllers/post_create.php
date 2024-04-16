<?php

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);

require_once VIEWS . "/incs/header.tpl.php";
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();
require_once VIEWS . "/incs/post_create.tpl.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['ua-name']);
  $nameLatin = addslashes($_POST['latin-name']);
  $photo = addslashes($_POST['photo']);
  $description = addslashes($_POST['description']);
  $categoryes = $_POST['categories'];

  $db->query("INSERT INTO `cards` (`id`, `title`, `latin`, `image`, `description`, `category`) 
          VALUES (NULL, '$name', '$nameLatin', '$photo', '$description', '$categoryes')");
  echo "<script>
          alert ('Пост успішно створенно');
          location.href ='create';
          </script>";
}
