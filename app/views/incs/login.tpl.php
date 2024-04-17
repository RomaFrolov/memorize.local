<main class="main container">
  <?php
  session_start();

  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <div class="card-item">
      <form action="" class="form" method="POST">


        <label for="">Login</label>
        <input type="text" name="login" placeholder="login" required>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="password" required>
        <p><?php
            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
            }
            unset($_SESSION['message']); ?></p>

        <button type="submit">Login</button>

      </form>
    </div>
  </section>
  <!-- <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
        ?> -->
</main>