<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
<h1>category</h1>
  <section class="card">
    <div class="form-button">
      <form action="random_card" method="POST">
        <input type="hidden" name="random_count" value="2">
        <button type="submit">Показати 2 рандомні пости</button>
      </form>
    </div>
    <div class="card-wrap">

      <?php foreach ($rand_post as $item) : ?>
        <div class="card-item">
          <div class="card-item__wrap">
            <h3 class="card-item__title"><?php echo ($card[$item]['title']); ?></h3>
          </div>

          <p data-f="cards" id="<?php echo ($card[$item]['id']); ?>" class="card-item__text blur"><?php echo ($card[$item]['description']); ?></p>

          <a class="card-item__link" href="card?id=<?= ($card[$item]['id']); ?>">більше</a>
          <!-- <a href="item?id=<?php echo ($card[$item]['id']); ?>" class="card-link"></a> -->
        </div>

      <?php endforeach; ?>
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
<script>
  window.onload = () => {
    let input = document.querySelector('#input');
    input.oninput = function() {
      let value = this.value.trim();
      let list = document.querySelectorAll('.card-item');

      if (value) {
        list.forEach(elem => {
          if (elem.innerText.search(value) == -1) {
            elem.classList.add('hide');
          }
        });
      } else {
        list.forEach(elem => {
          elem.classList.remove('hide');
        })
      }
      console.log(this.value);
    }
  }
</script>