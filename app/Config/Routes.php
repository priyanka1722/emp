<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Emp::index');
$routes->get('/add', 'Emp::employee_form');
$routes->match(['post','get'],'/register', 'Home::register');
$routes->match(['post','get'],'/employees', 'Emp::save_employee');



