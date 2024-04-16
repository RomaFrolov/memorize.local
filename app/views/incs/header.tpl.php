<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Naturalism</title>
  <link rel="stylesheet" href="/public/assets/style.css">
  <!-- <link rel="stylesheet" href="/public/assets/style.css"> -->
</head>

<body>
  <header class="header">
    <h2><a class="logo" href="/">Логотип</a></h2>
    <ul class="registr">
      <?php if (check_auth()) : ?>
        <li><?= $_SESSION['user']['name']; ?></li>
        <li> <a href="registr">Logout</a>
        </li>
      <?php else : ?>
        <li> <a href="registr">Registration</a>
        </li>
        <li> <a href="login">Login</a>
        </li>
      <?php endif; ?>
    </ul>
  </header>
</body>

</html>

<?php
// require_once VIEWS . "/incs/main.tpl.php";
?>