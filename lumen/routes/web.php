<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//localhost:3306/lumen/public
$router->get('/', function () use ($router) {
    return $router->app->version();
});

//localhost:3306/lumen/public/books
$router->get('/books', 'BookController@getAll');
$router->get('/books/{id}', 'BookController@getAllOne');
$router->post('/books/add', 'BookController@save');
$router->post('/books/edit/{id}', 'BookController@update');
$router->delete('/books/delete/{id}', 'BookController@delete');

$router->get('/authors', 'authorController@getAll');
$router->get('/authors/{id}', 'authorController@getAllOne');
$router->post('/authors/add', 'authorController@save');
$router->post('/authors/edit/{id}', 'authorController@update');
$router->delete('/authors/delete/{id}', 'authorController@delete');