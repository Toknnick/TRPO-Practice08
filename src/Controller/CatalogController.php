<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\View;

final class CatalogController
{
    public function index(): void
    {
        $items = [
            [
                'id' => 1,
                'title' => 'Клавиатура учебная',
                'price' => 3500,
            ],
            [
                'id' => 2,
                'title' => 'Мышь эргономичная',
                'price' => 1890,
            ],
            [
                'id' => 3,
                'title' => 'Наушники для лекций',
                'price' => 4200,
            ],
        ];

        View::render('catalog/index', [
            'title' => 'Каталог',
            'items' => $items,
            'currentPath' => '/catalog',
        ]);
    }
}