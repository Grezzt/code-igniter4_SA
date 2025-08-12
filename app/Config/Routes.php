<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// route produk
$routes->get('/produk', 'ProdukController::index');

$routes->get('/kategori', 'ProdukController::kategori');
$routes->get('/kategori/barang-elektronik', 'ProdukController::get_kategori');

$routes->get('/catalog', 'CatalogProduk::index');
$routes->get('/catalog/cari', 'CatalogProduk::cari');
