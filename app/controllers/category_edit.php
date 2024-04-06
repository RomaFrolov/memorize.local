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
    <?php require_once VIEWS . "/incs/category_edit.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['edit_category']);

  $id = $_POST['id'];

  $db->query("UPDATE `insectcategory` SET `category` = '$name' WHERE `insectcategory`.`id` = '$id'");
  

}
print_r($_POST);
require_once VIEWS . "/incs/category_edit.tpl.php";
