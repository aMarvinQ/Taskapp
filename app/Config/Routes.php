<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Signup::new');
$routes->get('/login', 'Login::new');
$routes->get('/logout', 'Login::delete');
