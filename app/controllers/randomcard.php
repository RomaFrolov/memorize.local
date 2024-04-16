<?php
use myfrm\Router;
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);
require_once VIEWS . "/incs/header.tpl.php";
require_once CONFIG . '/insectClass.php';

$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card`")->findAll();

$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();

$rand_post = [];
$number = count($card);
$rand_post = array_rand($card, $number);

if (isset($_POST['random_count'])) {
  $number = ($_POST['random_count']);
  $rand_post = array_rand($card, $number);
}
if (isset($_GET['category'])) {

  if ($_GET['category'] == 'all') {
    $id = $insectClass[$_GET['category']];
    $card = $db->query("SELECT * FROM `card`")->findAll();
    $number = count($card);
    $rand_post = array_rand($card, $number);

    if (isset($_POST['random_count'])) {
      $number = ($_POST['random_count']);
      $rand_post = array_rand($card, $number);
    }
  } else if ($_GET['category']) {
    $id = $insectClass[$_GET['category']];
    $card = $db->query("SELECT * FROM `card`  WHERE `category` = '$id'")->findAll();
    $number = count($card);
    $rand_post = array_rand($card, $number);


    if (isset($_POST['random_count'])) {
      $number = ($_POST['random_count']);
      $rand_post = array_rand($card, $number);
    }
  }
}

require_once VIEWS . "/incs/random_card.tpl.php";
