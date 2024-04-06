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
    <?php require_once VIEWS . "/incs/card_create.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = addslashes($_POST['card_name']);

    $description = addslashes($_POST['description']);
    $categoryes = $_POST['categories'];

    $db->query("INSERT INTO `card` (`id`, `title`, `description`, `category`) 
          VALUES (NULL, '$name', '$description', '$categoryes')");
          echo "<script>
          alert ('Картка успішно створенно');
          location.href ='create';
          </script>";
}