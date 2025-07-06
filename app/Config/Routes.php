<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/home', 'HomeController::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/register', 'RegisterController::index');

$routes->get('/blog', 'BlogController::index', ['filter' => 'auth']);
$routes->get('/cart', 'CartController::index', ['filter' => 'auth']);
$routes->get('/collection', 'CollectionController::index', ['filter' => 'auth']);
$routes->get('/store', 'StoreController::index', ['filter' => 'auth']);
$routes->get('/findStore', 'FindStoreController::index', ['filter' => 'auth']);
$routes->get('/produk-detail', 'ProdukDetailController::index', ['filter' => 'auth']);

$routes->get('auth/generatepassword', 'AuthController::generatepassword');