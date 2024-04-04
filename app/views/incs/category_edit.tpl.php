<?php


require_once VIEWS . "/incs/header.tpl.php";
require_once CONTROLLERS . "/category_edit.php";
require_once VIEWS . "/incs/admin.tpl.php";

$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();


?>
<body>
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
</body>

</html>