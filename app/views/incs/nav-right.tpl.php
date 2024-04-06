<nav class="main-right">

    <ul class="main-right__list">

      <li class="main-right__item">
        <a class="main-right__link" href="" href="?category=all">Всі</a><br>
      </li>

      <?php foreach ($category as $item) : ?>
        <li class="main-right__item">
          <a class="main-right__link" href="" href="?category=<?= ($item['category']); ?>"> <?= ($item['category']); ?></a><br>
        </li>
      <?php endforeach; ?>

    </ul>

  </nav>