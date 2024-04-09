<main class="main container">

  <?php require_once VIEWS . "/incs/nav-main.tpl.php"; ?>

  <section class="card">

    <div class="card-wrap">
      <?php foreach ($card as $item) : ?>

        <div class="card-item">

          <div class="card-item__wrap">
            <h3 data-f="all" class="card-item__title "><?php echo ($item['title']); ?></h3>
          </div>
          <p class="card-item__text"><?php echo ($item['description']); ?></p>
          <a class="card-item__link" href="card?id=<?= ($item['id']); ?>">більше</a>
          <!-- <a href="item?id=<?php echo ($item['id']); ?>" class="card-link"></a> -->


        </div>
      <?php endforeach; ?>
    </div>

  </section>


  <?php require_once VIEWS . "/incs/nav-right.tpl.php";
  ?>

</main>
<script>
  window.onload = () => {
    let input = document.querySelector('#input');

    input.oninput = function() {
      let value = this.value.trim();
      let list = document.querySelectorAll('.card-item');

      if (value) {

        list.forEach(elem => {

          if (elem.innerText.toLowerCase().search(value) == -1) {
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