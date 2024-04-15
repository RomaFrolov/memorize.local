<?php
require_once VIEWS . "/incs/header.tpl.php";
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();

?>


<main class="main container">

  <?php require_once VIEWS . "/incs/nav-main.tpl.php"; ?>

  <section class="card">
  <a href="card_edit?id=<?= $card['id']; ?>">Редагувати пост</a><br>

    <div class="card-wrap">


        <div class="card-content-item">

          <div class="card-content-item__wrap">
            <h3 data-f="all" class="card-content-item__title "><?php echo ($card['title']); ?></h3>
          </div>
          <p class="card-content-item__text"><?php echo ($card['description']); ?></p>
          <a class="card-content-item__link" href="card?id=<?= ($card['id']); ?>">більше</a>


        </div>

    </div>

  </section>


  <?php require_once VIEWS . "/incs/nav-right.tpl.php";
  ?>

</main>