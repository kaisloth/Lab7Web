<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/articles', 'ArticleController::articles');
$routes->get('/articles/(:any)', 'ArticleController::view/$1');

$routes->get('/admin', 'UserController::index');
$routes->post('/admin', 'UserController::login');


$routes->group('admin',['filters' => 'Auth'], function($routes) {
    $routes->get('articles', 'ArticleController::admin');
    $routes->add('add', 'ArticleController::add');
    $routes->add('edit/(:any)', 'ArticleController::edit/$1');
    $routes->get('delete/(:any)', 'ArticleController::delete/$1');
});
