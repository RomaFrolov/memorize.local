<?php

require_once CONFIG . '/insectClass.php' ;
require_once CONTROLLERS ."/index.php";
require_once CONTROLLERS ."/counter.php";
if ($_GET['category']) {
  $id = $insectClass[$_GET['category']];
  $post = $db->query("SELECT * FROM `cards`  WHERE `category` = '$id'")->findAll();
  $counter = count($post);


}
if ($_GET['category']=='all') {

$post = $db->query("SELECT * FROM `cards`")->findAll();

}
$counterall = count($post);
$coleoptera = count($post);
// яка кількість масивів існує в категорії 

// print_r($_POST);
?>
<body>
  
  <nav class="nav-category-sort">
<h4>Сортування</h4>
    <ul class="sort-category">
    <p class="sort-category__number"><?= $counterall ;?></p>

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
$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findOrFail();


if ($_GET['category']) {
    $id = $insectClass[$_GET['category']];
    $post = $db->query("SELECT * FROM `cards`  WHERE `category` = '$id'")->findAll();
    $counter = count($post);

  
}
if ($_GET['category']=='all') {

  $post = $db->query("SELECT * FROM `cards`")->findAll();

}


