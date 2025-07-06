<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/register', 'RegisterController::index');

$routes->get('/dashboard-admin', 'DashboardAdminController::index');
$routes->get('/produk-admin', 'ProdukAdminController::index');
$routes->get('/order-admin', 'OrderAdminController::index');

$routes->get('/blog', 'BlogController::index');
$routes->get('/cart', 'CartController::index');
$routes->get('/collection', 'CollectionController::index');
$routes->get('/store', 'StoreController::index');
$routes->get('/find-store', 'FindStoreController::index');
$routes->get('/produk-detail', 'ProdukDetailController::index');

$routes->get('auth/generatepassword', 'AuthController::generatepassword');

$routes->group('/produk-admin', function ($routes) { 
    $routes->get('', 'ProdukAdminController::index');
    $routes->post('', 'ProdukAdminController::create');
    $routes->post('edit/(:any)', 'ProdukAdminController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukAdminController::delete/$1');
    $routes->get('download', 'ProdukAdminController::download');
});
