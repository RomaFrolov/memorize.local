<?php

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
  $fillable = ['title', 'description', 'category'];
  $name = addslashes($_POST['card_name']);

  $description = addslashes($_POST['description']);
  $categoryes = $_POST['categories'];

  $data = load($fillable);

  //validator
  // $errors = [];
  // if (empty(trim($data['title']))) {
  //   $errors['title'] = 'title is required';
  // }
  // if (empty(trim($data['description']))) {
  //   $errors['description'] = 'description is required';
  // }
  // if (empty(trim($data['category']))) {
  //   $errors['category'] = 'category is required';
  // }


    $db->query("INSERT INTO `card` (`title`, `description`, `category`) 
          VALUES (?,?,?)", [$name, $description, $categoryes]);
    

    echo "<script>
          alert ('Картка успішно створенно');
          location.href ='create_card';
          </script>";
  
// }

