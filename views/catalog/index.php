<?php

use App\Core\View;

/** @var array<int, array{id: int, title: string, price: int|float}> $items */
?>
<section class="page">
  <p class="eyebrow">Каталог</p>
  <h1>Товары</h1>
  <p class="lead">Пока тестовый список. Полноценная модель появится в следующей работе.</p>

  <div class="product-grid">
    <?php foreach ($items as $item): ?>
      <article class="product-card">
        <h2><?= View::e($item['title']) ?></h2>
        <p class="price"><?= View::e(number_format((float) $item['price'], 0, '.', ' ')) ?> ₽</p>
      </article>
    <?php endforeach; ?>
  </div>
</section>