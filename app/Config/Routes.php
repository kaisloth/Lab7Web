<?php

use App\Controllers\ArticleController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->get('/admin', 'UserController::index');

$routes->group('api', function($routes) {
    $routes->post('login', 'UserController::login');
    $routes->post('register', 'UserController::register');
    $routes->get('users', 'UserController::getUsers');

    $routes->post('article/add', 'ArticleController::add');
    $routes->get('article/search/(:any)', 'ArticleController::search/$1');
});

$routes->group('/', function($routes) {
    $routes->get('about', 'Page::about');
    $routes->get('contact', 'Page::contact');
    $routes->get('articles', 'ArticleController::articles');
    $routes->get('articles/(:any)', 'ArticleController::view/$1');
});

$routes->group('admin',['filters' => 'Auth'], function($routes) {
    $routes->get('dashboard', 'ArticleController::dashboard');
    $routes->add('add', 'ArticleController::add');
    $routes->add('edit/(:any)', 'ArticleController::edit/$1');
    $routes->get('delete/(:any)', 'ArticleController::delete/$1');
    $routes->get('register', 'Page::register');
});
