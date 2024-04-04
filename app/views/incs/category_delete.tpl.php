<?php


require_once VIEWS . "/incs/header.tpl.php";
require_once CONTROLLERS . "/category_delete.php";
require_once VIEWS . "/incs/admin.tpl.php";

$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();


?>

<body>
  <div class="category-wrapp">

   

      <?php foreach ($category as $item) : ?>

        <div class="category">

          <form action="" class="form" method="POST">
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
            <label for=""><?= $item['category'] ?></label>
            <button type="submit" name="delete_category">Видалити</button>
          </form>

        </div>

      <?php endforeach; ?>


</body>

</html>