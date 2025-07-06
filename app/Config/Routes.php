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

$routes->group('/produk-admin', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukAdminController::index');
    $routes->post('', 'ProdukAdminController::create');
    $routes->post('edit/(:any)', 'ProdukAdminController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukAdminController::delete/$1');
    $routes->get('download', 'ProdukAdminController::download');
});
$routes->post('/cart/add', 'CartController::add');
$routes->get('/cart', 'CartController::index');

$routes->get('auth/generatepassword', 'AuthController::generatepassword');
