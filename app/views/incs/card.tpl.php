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
        <h3 data-f="all" class="card__title "><?php echo ($card['title']); ?></h3>
      </div>
      <p class="card__text"><?php echo ($card['description']); ?></p>
      <a href="card?id=<?= ($card['id']); ?>">більше</a>
      </div>

    </div>
</body>

</html>