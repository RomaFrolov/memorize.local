<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>

  <section class="card">
    <div class="card-wrap">
      <form action="" method="POST">
        <input type="hidden" name="random_count" value="3">
        <button type="submit">Показати 3 рандомні пости</button>
      </form>

      <?php


      require_once CONFIG . '/insectClass.php';

      if (isset($_GET['category'])) {

        if ($_GET['category']) {
          $id = $insectClass[$_GET['category']];
          $card = $db->query("SELECT * FROM `card`  WHERE `category` = '$id'")->findAll();
          $number = count($card);
          
          if(isset($_POST['random_count'])){    
            $number = ($_POST['random_count']);
        }
          $rand_post = array_rand($card, $number);

          foreach ($rand_post as $item) {


      ?>
            <div class="card-item">
              <div class="card-item__wrap">
                <h3 class="card-item__title"><?php echo ($card[$item]['title']); ?></h3>
              </div>

              <p data-f="cards" id="<?php echo ($card[$item]['id']); ?>" class="card-item__text blur"><?php echo ($card[$item]['description']); ?></p>

              <a class="card-item__link" href="card?id=<?= ($card[$item]['id']); ?>">більше</a>
              <!-- <a href="item?id=<?php echo ($card[$item]['id']); ?>" class="card-link"></a> -->
            </div>

            <?php
          } ?><?php }
          } ?>
    </div>
  </section>
  <?php require_once VIEWS . "/incs/nav-right.tpl.php";
  ?>
</main>

<script>
  let card = document.getElementsByClassName('card-item__text');
  for (let item of card) {
    item.addEventListener('click', event => {
      if (event.target.tagName !== 'P') return false;

      if (event.target.classList.contains('card-item__text')) {
        event.currentTarget.classList.toggle('blur');
        console.log(event.target.dataset);

      }


    })
  };
</script>