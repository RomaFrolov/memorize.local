<?php




$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();


?>

<div class="category-wrapp">
    <?php foreach ($category as $item) : ?>

      <div class="category">

        <form action="" class="form" method="POST">
          <input type="hidden" name="id" value="<?= $item['id'] ?>">

          <input type="text" name="edit_category" value="<?= $item['category'] ?>">
          
          <button type="submit">Редагувати</button>
        </form>

      </div>

    <?php endforeach; ?>
  </div>
