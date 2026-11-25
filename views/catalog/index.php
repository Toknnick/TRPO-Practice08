<?php

use App\Core\View;
use App\Model\Product;

/** @var Product[] $items */
/** @var array<int, string> $categoryNames */
?>
<section class="page">
  <p class="eyebrow">Каталог</p>
  <h1>Товары</h1>
  <p class="lead">Данные из products.json через ProductRepository → модели Product.</p>

  <div class="product-grid">
    <?php foreach ($items as $item): ?>
      <article class="product-card">
        <h2><?= View::e($item->name()) ?></h2>
        <p><?= View::e($categoryNames[$item->categoryId()] ?? 'Без категории') ?></p>
        <p class="price"><?= View::e($item->formatPrice()) ?></p>
        <p>Остаток: <?= View::e((string) $item->stock()) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>