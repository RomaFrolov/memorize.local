<?php
require_once VIEWS ."/incs/header.tpl.php";
require_once CONFIG . "/config.php";
require_once VIEWS . "/incs/random_card.tpl.php";

?>

<body>
  <section class="container">
    <?php

    $id = $_GET['id'] ?? 0;

    $post = $db->query("SELECT * FROM `cards`")->findAll();
    $card = $db->query("SELECT * FROM `card`")->findAll();

    $category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();


$rand_post = [];
$rand_post = array_rand($post, 3);

// require_once VIEWS . "/incs/random_card.tpl.php";

?>



