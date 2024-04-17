<?php

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);
require_once VIEWS . "/incs/header.tpl.php";

$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();
$id = $_GET['id'];
$card = $db->query("SELECT * FROM `card` WHERE id={$id}")->find();

require_once VIEWS . "/incs/card_edit.tpl.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['ua_card_name']);
  // $nameLatin = addslashes($_POST['latin_card_name']);
  // $photo = addslashes($_POST['photo']);
  $description = addslashes($_POST['description']);
  $id = $_GET['id'];
  $categoryes = $_POST['categories'];

  $db->query("UPDATE `card` SET `title` = '$name', `description` = '$description', `category` = '$categoryes' WHERE `card`.`id` = '$id'");
  echo "<script>
  alert ('Пост успішно редаговано');
  location.href ='card?id={$id}';
  </script>";
  if (isset($_POST['delete_card'])) {
    $id = $_GET['id'];
    $db->query("DELETE FROM `card` WHERE `card`.`id` = '$id'");
    echo "<script>
    alert ('Пост успішно видалено');
    </script>";
    redirect('/');
  }
}


