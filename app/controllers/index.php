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
// $post = $db->query("SELECT * FROM `cards` ORDER by `title` ASC")->findAll();



require_once VIEWS ."/incs/header.tpl.php";
require_once VIEWS ."/incs/index_body.tpl.php";


?>

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

</div>
  <?php endforeach; ?>

  
</div>
  </section>
</body>
<script src="/script/script.js"></script>
<a href="post"></a>
</html>