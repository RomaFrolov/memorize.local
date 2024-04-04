<?php


require_once VIEWS . "/incs/header.tpl.php";
require_once CONTROLLERS . "/category_create.php";
require_once VIEWS . "/incs/admin.tpl.php";

$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();


?>

<body>
  <div class="category-wrapp">

    <div class="card">
      
      <form action="" class="form" method="POST">
        <label for="">Назва категорії</label>
        <input type="text" name="category" required>


        <button type="submit">Створити</button>
        </form>
    </div>

  </div>
</body>

</html>