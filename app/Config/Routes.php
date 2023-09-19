<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', [Home::class, 'index']);

$routes->get('/tabs/(:segment)', fn($id) => view("tab-{$id}"));

$routes->get('/count/(:segment)', 
            fn ($val) => view('count', ['val' => $val+ 1]) 
        );

$routes->view('/', 'page');
