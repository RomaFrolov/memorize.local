<?php
require_once PUBLICS . "/index.php";
require_once CONFIG . "/config.php";
require_once VIEWS . "/incs/header.tpl.php";
require_once CONFIG . '/insectClass.php';

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM `cards`")->findAll();
$card = $db->query("SELECT * FROM `card`")->findAll();
$number = count($card);
$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();

if (isset($_GET['category'])) {
  if ($_GET['category']) {
    $id = $insectClass[$_GET['category']];
    $card = $db->query("SELECT * FROM `card`  WHERE `category` = '$id'")->findAll();
    $number = count($card);
  }

  if ($_GET['category'] == 'all') {

    $post = $db->query("SELECT * FROM `cards`")->findAll();
    $card = $db->query("SELECT * FROM `card`")->findAll();
    $number = count($card);
  }
}

require_once VIEWS . "/incs/main.tpl.php";
