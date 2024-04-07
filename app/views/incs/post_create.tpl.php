<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
  <div class="card-item">
  <form action="" class="form" method="POST">
    <label for="">Українська назва</label>
    <input type="text" name="ua-name" required>

    <label for="">Латинська назва</label>
    <input type="text" name="latin-name" required>

    <label for="">Посилання на фото</label>
    <input type="text" name="photo" required>

    <label for="">Опис</label>
    <textarea cols="19" rows="5" type="text" name="description" required></textarea>

    <label for="">Ряд комахи</label>
    <select name="categories" id="">
      <?php foreach ($category as $item): ?>
      <option value="<?php echo ($item['id']); ?>"><?php echo ($item['category']); ?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit">Створити</button>

  </form>
</div>
  </section>
  <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
  ?>
</main>

