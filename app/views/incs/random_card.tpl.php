<?php
require_once CONTROLLERS . "/random_card.php";

$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card`")->findAll();

$category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();


$rand_post = [];
$rand_post = array_rand($card, 4);

?>

<div class="card-container">


  <?php foreach ($rand_post as $item) : ?>
    <div class="card-wrappers">

      <div class="card">
        <div class="card-title__wrap">
          <h3 class="card__title"><?php echo ($card[$item]['title']); ?></h3>
        </div>
        <div class="card-text">
          <p data-f="cards" id="<?php echo ($card[$item]['id']); ?>" class="card__text blur"><?php echo ($card[$item]['description']); ?></p>
        </div>
        <a href="card?id=<?= ($card[$item]['id']); ?>">більше</a>
        <!-- <a href="item?id=<?php echo ($card[$item]['id']); ?>" class="card-link"></a> -->
      </div>

    </div>
  <?php endforeach; ?>

</div>



</section>
</body>
<script>
  let card = document.getElementsByClassName('card__text');
  for (let item of card) {
    item.addEventListener('click', event => {
      if (event.target.tagName !== 'P') return false;

      if (event.target.classList.contains('card__text')) {
        event.currentTarget.classList.toggle('blur');
        console.log(event.target.dataset);

      }


    })
  };
</script>

</html>