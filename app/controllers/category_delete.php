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
    <?php require_once VIEWS . "/incs/category_delete.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['delete_category'])) {
      $id = $_POST['id'];
      $db->query("DELETE FROM `insectcategory` WHERE `insectcategory`.`id` ='$id'");
    }
  
}
require_once VIEWS . "/incs/category_delete.tpl.php";
