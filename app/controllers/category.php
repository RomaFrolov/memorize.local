<?php
session_start();

/**
 * @var Db $db
 */

use myfrm\App;
use myfrm\Db;

require_once VIEWS . "/incs/header.tpl.php";
if (isset($_SESSION['user'])) {
  $author = $_SESSION['user']['id'];
}
$db = App::get(Db::class);
$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card` WHERE `category` = '$id' AND `author`='$author'")->findAll();

$rand_post = [];
$number = count($card);
$rand_post = array_rand($card, $number);

if (isset($_GET['category'])) {
  if (isset($_POST['random_count'])) {
    $number = ($_POST['random_count']);
    $rand_post = array_rand($card, $number);
  }
}
require_once VIEWS . "/incs/category.tpl.php";
