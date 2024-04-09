<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <?php foreach ($category as $item) : ?>


        <form action="" class="form" method="POST">
          <input type="hidden" name="id" value="<?= $item['id'] ?>">

          <input type="text" name="edit_category" value="<?= $item['category'] ?>">
          
          <button type="submit">Редагувати</button>
        </form>



    <?php endforeach; ?>
  
  </section>
  <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
  ?>
</main>
