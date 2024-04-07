<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <div class="card-item">

      <form action="" class="form" method="POST">
        <label for="">Назва категорії</label>
        <input type="text" name="category" required>

        <button type="submit">Створити</button>
      </form>
    </div>
  </section>
  <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
  ?>
</main>