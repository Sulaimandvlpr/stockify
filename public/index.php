<?php 
$routes = [
    'dashboard' [
        'title' => 'Dashboard',
        'view' => '/resources/views/dashboard/index.php',
    ],

    'products' [
        'title' => 'Products',
        'view' => '/resources/views/products/index.php',
    ],
];

$page = $_GET['page'] ?? 'dashboard';
$pageTitle = $routes[$page]['title'];
$contentView = $routes[$page]['view'];