<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">
    <div class="card-container">
      <form action="" method="POST">
        <div class="card">
          <input type="hidden" name="id" value="<?= $card['id'] ?>">

          <div class="card-title__wrap">
            <input type="text" name="ua_card_name" value="<?php echo ($card['title']); ?>">
          </div>
          <textarea cols="30" rows="10" type="text" name="description" value="<?php echo ($card['description']); ?>"><?php echo ($card['description']); ?>
            </textarea>

          <select name="categories" id="">
            <?php foreach ($category as $item) : ?>
              <option value="<?php echo ($item['id']); ?>"><?php echo ($item['category']); ?></option>
            <?php endforeach; ?>
          </select>

          <button type="submit">Редагувати</button>
          <button type="submit" name="delete_card">Видалити</button>

      </form>


      <!-- <a href="item?id=<?php echo ($item['id']); ?>" class="card-link"></a> -->
    </div>
  </section>
  <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
  ?>
</main>