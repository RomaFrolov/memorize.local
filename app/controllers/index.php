<?php
require_once PUBLICS ."/index.php";
require_once CONFIG ."/config.php";
require_once VIEWS ."/incs/header.tpl.php";


?>
<body>
  <section class="container">
  <?php

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM `cards`")->findAll();

$category = $db->query("SELECT * FROM `insectcategory`")->findAll();




require_once VIEWS ."/incs/header.tpl.php";

$myimg = IMAGES . '/insect.jpg';
var_dump($myimg);
?>
<img src="<?= $myimg;?>" alt="">
<div class="card-container">
  <?php foreach ($post as $item):?>

<div class="card-wrappers">
  <div class="card">
    <div class="card-title__wrap">
      <h3 data-f="all" class="card__title "><?php echo ($item['title']); ?></h3>
    </div>

    <div class="card-title__latin">
      <h4 class="card__title-latin "><?php echo ($item['latin']); ?></h4>
    </div>
    <div class="card-images">
      <img class="card__image" src="<?php echo ($item['image']); ?>" width="200px" alt="">
    </div>
    <p class="card__text"><?php echo ($item['description']); ?></p>
    <a href="post?id=<?= ($item['id']); ?>">більше</a>
    <!-- <a href="item?id=<?php echo ($item['id']); ?>" class="card-link"></a> -->
  </div>
<div class="card-nav">
      <ul class="card-nav-list">
        <li class="card-nav__item">
</li>
      </ul>
      <ul class="card-nav-list">
        <li class="card-nav__item">систематика</li>
      </ul>
      <ul class="card-nav-list">
        <li class="card-nav__item">ареал</li>
      </ul>
      <ul class="card-nav-list">
        <li class="card-nav__item">цікаве</li>
      </ul>
    </div>
</div>
  <?php endforeach; ?>

  
</div>
  </section>
</body>
<script src="/script/script.js"></script>
<a href="post"></a>
</html>