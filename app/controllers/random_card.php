<?php
session_start();

use myfrm\Router;
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);
require_once VIEWS . "/incs/header.tpl.php";
require_once CONFIG . '/insectClass.php';

$id = $_GET['id'] ?? 0;
if(isset($_SESSION['user'])){
  $author = $_SESSION['user']['login'];
}
$card = $db->query("SELECT * FROM `card` WHERE `author`='$author' ")->findAll();


$category = $db->query("SELECT * FROM `insectcategory` WHERE `author`='$author' ORDER BY `insectcategory`.`category` ASC
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
    $card = $db->query("SELECT * FROM `card` WHERE `author`='$author'")->findAll();
    $number = count($card);
    $rand_post = array_rand($card, $number);

    if (isset($_POST['random_count'])) {
      $number = ($_POST['random_count']);
      $rand_post = array_rand($card, $number);
    }
  } else if ($_GET['category']) {
    $id = $insectClass[$_GET['category']];
    $card = $db->query("SELECT * FROM `card`  WHERE `category` = '$id' AND `author`='$author'")->findAll();
    $number = count($card);
    $rand_post = array_rand($card, $number);


    if (isset($_POST['random_count'])) {
      $card = $db->query("SELECT * FROM `card`  WHERE `category` = '$id' AND `author`='$author'")->findAll();

      $number = ($_POST['random_count']);
      $rand_post = array_rand($card, $number);
    }
  }
}

require_once VIEWS . "/incs/random_card.tpl.php";
