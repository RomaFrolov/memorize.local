<?php
require_once VIEWS . "/incs/header.tpl.php";
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();

?>



<body>
  <nav class="nav">
    <ul class="nav-list">

      <li class="nav__item">
        <a href="post_edit?id=<?= $post['id']; ?>">Редагувати пост</a><br>
      </li>
      
    </ul>
  </nav>
  <div class="card-container">

    <div class="card">
      <div class="card-title__wrap">
        <h3 data-f="all" class="card__title "><?php echo ($post['title']); ?></h3>
      </div>

      <div class="card-title__latin">
        <h4 class="card__title-latin "><?php echo ($post['latin']); ?></h4>
      </div>
      <div class="card-images">
        <img class="card__image" src="<?php echo ($post['image']); ?>" width="200px" alt="">
      </div>
      <p class="card__text"><?php echo ($post['description']); ?></p>
      <a href="post?id=<?= ($post['id']); ?>">більше</a>
      </div>

    </div>
</body>

</html>