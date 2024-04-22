<nav class="main-right">
  <ul class="main-right__list">
    
    <input type="text" id="input" class="input" placeholder="Пошук">
    <p title="Кількість карток в категорії" class="sort-category__number">Кількість карток:<?= $number; ?></p>


    <li class="main-right__item"><a class="main-right__link" href="?category=all">Всі</a>
    </li>
   
    <?php foreach ($category as $item) : ?>

      <li class="main-right__item">
        <a class="main-right__link" href="?category=<?= ($item['category']); ?>"> <?= ($item['category']); ?></a>
      </li>
      
      

    <?php endforeach; ?>

  </ul>
</nav>