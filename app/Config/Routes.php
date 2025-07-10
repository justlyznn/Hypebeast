<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/register', 'RegisterController::index');

$routes->get('/dashboard-admin', 'DashboardAdminController::index', ['filter' => 'auth:admin']);
$routes->get('/produk-admin', 'ProdukAdminController::index', ['filter' => 'auth:admin']);
$routes->get('/order-admin', 'OrderAdminController::index', ['filter' => 'auth:admin']);

$routes->get('/blog', 'BlogController::index');
$routes->get('/collection', 'CollectionController::index');
$routes->get('/collection/(:segment)', 'CollectionController::index/$1');
$routes->get('/store', 'StoreController::index');
$routes->get('/store/(:segment)', 'StoreController::index/$1');
$routes->get('/find-store', 'FindStoreController::index');
$routes->get('/produk-detail', 'ProdukDetailController::index');

$routes->get('auth/generatepassword', 'AuthController::generatepassword');

$routes->group('produk-admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'ProdukAdminController::index');
    $routes->post('', 'ProdukAdminController::create');
    $routes->post('edit/(:any)', 'ProdukAdminController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukAdminController::delete/$1');
});

$routes->group('cart', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'CartController::index');
    $routes->post('', 'CartController::cart_add');
    $routes->post('edit', 'CartController::cart_edit');
    $routes->get('delete/(:any)', 'CartController::cart_delete/$1');
    $routes->get('clear', 'CartController::cart_clear');
});

$routes->get('pesanan', 'InvoiceController::index', ['filter' => 'auth:user']);
$routes->get('pesanan/download', 'InvoiceController::download', ['filter' => 'auth:user']);

$routes->get('checkout', 'CartController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'CartController::buy', ['filter' => 'auth']);

$routes->get('get-location', 'CartController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'CartController::getCost', ['filter' => 'auth']);

$routes->get('auth/generatepassword', 'AuthController::generatepassword');
