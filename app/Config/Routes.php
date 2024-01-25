<?php
	
	use App\Controllers\News;
	use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/(:segment)', 'Pages::view/$1');
	
//$routes->get('news', [News::class, 'index']);
$routes->get('/news', 'News::index');
$routes->get('/news/(:segment)', 'News::view/$1');
