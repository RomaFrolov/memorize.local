<?php
require_once PUBLICS . "/index.php";
require_once CONFIG . "/config.php";
require_once VIEWS . "/incs/header.tpl.php";

$id = $_GET['id'] ?? 0;

    $post = $db->query("SELECT * FROM `cards`")->findAll();
    $card = $db->query("SELECT * FROM `card`")->findAll();

    $category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();
?>

<body>
  <section class="container">
    <?php

    

require_once VIEWS . "/incs/index_body.tpl.php";
$rand_post = [];
$rand_post = array_rand($post, 3);


?>

    <div class="card-container">

    <?php foreach($rand_post as $item): ?>


        <div class="card-wrappers">

          <div class="card">
            <div class="card-title__wrap">
              <h3 data-f="all" class="card__title "><?php echo ($post[$item]['title']); ?></h3>
            </div>

            <div class="card-title__latin">
              <h4 class="card__title-latin "><?php echo ($post[$item]['latin']); ?></h4>
            </div>
            <div class="card-images">
              <img class="card__image" src="<?php echo ($post[$item]['image']); ?>" width="200px" alt="">
            </div>
            <p class="card__text blur"><?php echo ($post[$item]['description']); ?></p>
            <a href="post?id=<?= ($post[$item]['id']); ?>">більше</a>
            <!-- <a href="item?id=<?php echo ($post[$item]['id']); ?>" class="card-link"></a> -->
          </div>

        </div>
      <?php endforeach; ?>

      <?php foreach ($card as $item) : ?>

        <div class="card-wrappers">
          <div class="card">
            <div class="card-title__wrap">
              <h3 data-f="all" class="card__title "><?php echo ($item['title']); ?></h3>
            </div>
            <p class="card__text"><?php echo ($item['description']); ?></p>
            <a href="card?id=<?= ($item['id']); ?>">більше</a>
            <!-- <a href="item?id=<?php echo ($item['id']); ?>" class="card-link"></a> -->
          </div>

        </div>
      <?php endforeach; ?>

    </div>

  </section>
</body>
 ?>"></script>

</html>