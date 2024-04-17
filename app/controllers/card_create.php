<?php
session_start();

/**
 * @var Db $db
 */

use myfrm\App;
use myfrm\Db;

$db = App::get(Db::class);

// require_once VIEWS . "/incs/header.tpl.php";
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();
// require_once VIEWS . "/incs/card_create.tpl.php";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fillable = ['title', 'description'];
// $title = addslashes($_POST['title']);

// $description = addslashes($_POST['description']);
$category = $_POST['categories'];
$author = $_SESSION['user']['login'];

$data = load($fillable);

//validator
$errors = [];
if (empty(addslashes(trim($data['title'])))) {
  $errors['title'] = 'title is required';
}
if (empty(addslashes(trim($data['description'])))) {
  $errors['description'] = 'description is required';
}
// if (empty(addslashes(trim($data['category'])))) {
//   $errors['category'] = 'category is required';
// }

if (empty($errors)) {
  $db->query("INSERT INTO `card` (`title`, `description`, `category`,`author`) 
          VALUES (?,?,?,?)", [$data['title'], $data['description'], $category, $author]);


  echo "<script>
          alert ('Картка успішно створенно');
          location.href ='/';
          </script>";
}
    
  
// }
