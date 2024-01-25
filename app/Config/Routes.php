<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages', 'Pages::index');
$routes->get('(:segment)', 'Pages::view/$1');