<?php

/**
 * @var Db $db
 */

require_once VIEWS . "/incs/header.tpl.php";


?>
<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <?php require_once VIEWS . "/incs/category_create.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['category']);


  $db->query("INSERT INTO `insectcategory` (`id`, `category`) 
          VALUES (NULL, '$name')");

}



require_once VIEWS . "/incs/category_create.tpl.php";
