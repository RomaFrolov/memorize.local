<?php
require_once VIEWS . "/incs/header.tpl.php";
require_once CONFIG . "/config.php";

?>

<body>

    <?php

    $id = $_GET['id'] ?? 0;

    $post = $db->query("SELECT * FROM `cards`")->findAll();
    $card = $db->query("SELECT * FROM `card`")->findAll();

    $category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();




    // require_once VIEWS . "/incs/random_card.tpl.php";

    ?>
    <main class="main container">
      <?php
      require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
      <section class="card">
        <?php require_once VIEWS . "/incs/random_card.tpl.php";
        ?>
      </section>
      <?php require_once VIEWS . "/incs/nav-right.tpl.php";
      ?>
    </main>