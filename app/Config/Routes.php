<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
// ! Routes Saat Ini Dijalankan
$routes->get('/', 'Pages::index');

// * Routes Default
// $routes->get('/', 'Home::index');