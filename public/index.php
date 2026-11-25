<?php

declare(strict_types=1);

$root = dirname(__DIR__);

require_once $root . '/src/Core/View.php';
require_once $root . '/src/Core/Router.php';
require_once $root . '/src/Controller/HomeController.php';
require_once $root . '/src/Controller/CatalogController.php';
require_once $root . '/src/Controller/ErrorController.php';

use App\Controller\CatalogController;
use App\Controller\ErrorController;
use App\Controller\HomeController;
use App\Core\Router;

$router = Router::fromCsv($root . '/data/routes.csv');
$router->setControllers([
    'HomeController' => new HomeController($root . '/data/pages.json'),
    'CatalogController' => new CatalogController(),
    'ErrorController' => new ErrorController(),
]);

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if (!is_string($uri) || $uri === '') {
    $uri = '/';
}

$router->dispatch($method, $uri);