<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tamu', 'Tamu::index');
$routes->get('/register', 'Tamu::register');
$routes->post('/registerProses', 'Tamu::registerProses');
$routes->get('/edit/(:any)', 'Tamu::edit/$1');
$routes->post('/editProses', 'Tamu::editProses');
$routes->get('/delete/(:any)', 'Tamu::delete/$1');