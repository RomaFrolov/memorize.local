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



require_once VIEWS . "/incs/category.tpl.php";
