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
    <?php require_once VIEWS . "/incs/post_edit.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['ua_card_name']);
  $nameLatin = addslashes($_POST['latin_card_name']);
  // $photo = addslashes($_POST['photo']);
  $description = addslashes($_POST['description']);
  $id = $_GET['id'];
  $categoryes = $_POST['categories'];

  $db->query("UPDATE `cards` SET `title` = '$name', `latin` = '$nameLatin', `description` = '$description', `category` = '$categoryes' WHERE `cards`.`id` = '$id' ");


}
if (isset($_POST['delete_card'])) {
  $id = $_GET['id'];
  $db->query("DELETE FROM `cards` WHERE `cards`.`id` = '$id'");
  echo "<script>
            alert ('Пост успішно видален');
            location.href ='/';
            </script>";
}


