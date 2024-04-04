<?php

require_once CONFIG . '/insectClass.php' ;
?>
<body>
  
  <nav class="nav-category-sort">
<h4>Сортування</h4>
    <ul class="sort-category">
      <li class="sort-category__item"><a class="sort-category__link" href="?category=all">Всі</a>
</li>
    <?php foreach ($category as $item) : ?>

      <li class="sort-category__item">
      <a class="sort-category__link" href="?category=<?= ($item['category']); ?>"> <?= ($item['category']); ?></a>
      </li>
      <?php endforeach; ?>

    </ul>
  </nav>

</body>
<?php
$category = $db->query("SELECT * FROM `insectcategory`")->findOrFail();

if ($_GET['category']) {
    $id = $insectClass[$_GET['category']];
    $post = $db->query("SELECT * FROM `cards`  WHERE `category` = '$id'")->findAll();
  
}
if ($_GET['category']=='all') {

  $post = $db->query("SELECT * FROM `cards`")->findAll();

}



