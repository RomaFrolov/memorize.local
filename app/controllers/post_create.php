<?php

/**
 * @var Db $db
 */
// require_once PUBLICS . "/index.php";
require_once VIEWS . "/incs/header.tpl.php";


?>
<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <?php require_once VIEWS . "/incs/post_create.tpl.php";
    ?>
  </section>
  <?php require_once VIEWS . "/incs/admin.tpl.php";
  ?>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['ua-name']);
  $nameLatin = addslashes($_POST['latin-name']);
  $photo = addslashes($_POST['photo']);
  $description = addslashes($_POST['description']);
  $categoryes = $_POST['categories'];

  $db->query("INSERT INTO `cards` (`id`, `title`, `latin`, `image`, `description`, `category`) 
          VALUES (NULL, '$name', '$nameLatin', '$photo', '$description', '$categoryes')");
  echo "<script>
          alert ('Пост успішно створенно');
          location.href ='create';
          </script>";
}
?>