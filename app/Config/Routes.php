<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/blog', 'BlogController::index');
$routes->get('/cart', 'CartController::index');
$routes->get('/collection', 'CollectionController::index');
$routes->get('/store', 'StoreController::index');
$routes->get('/findStore', 'FindStoreController::index');
$routes->get('/produk-detail', 'ProdukDetailController::index');