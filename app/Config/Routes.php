<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'UsersController::index');
$routes->get('posts', 'PostsController::index');
$routes->get('comments', 'CommentsController::index');
$routes->get('test', 'TestController::index');
$routes->get('mockdata', 'MockDataController::index');


