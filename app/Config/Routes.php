<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'home::index');
$routes->get('/', 'Admin\Dashboard::index', ['as' => 'dashboard']);
