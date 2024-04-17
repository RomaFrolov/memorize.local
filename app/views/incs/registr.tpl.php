<?php session_start();
?>
<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <h2>Registration page</h2>

    <div class="card-item">
      <form action="" class="form" method="POST">
        <label for="">Login</label>
        <input type="text" name="login" placeholder="login" required>

        <label for="">Email</label>
        <input type="email" name="email" placeholder="email" required>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="password" required>
        <label for="">Password confirme</label>
        <input type="password" name="passwordconf" placeholder="password confirme" required>
        <p><?php

            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
            }
            unset($_SESSION['message']);

            ?></p>

        <button type="submit">Registration</button>

      </form>
    </div>
  </section>
  <!-- <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
        ?> -->
</main>