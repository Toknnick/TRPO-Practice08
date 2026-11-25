# Практическая работа 8 — ТРПО

PHP MVC: модели каталога и источник данных.

**Студент:** Юшин Максим  
**Группа:** ЭПБО-01-25

## Результат

Каталог интернет-магазина: JSON  `ProductRepository`  модели `Product`/`Category` → `CatalogController`  views.  
Есть фильтр по категории, сортировка, карточка товара, 404 для неизвестного id.

## Запуск

```bash
php -S localhost:8000 -t public public/router.php