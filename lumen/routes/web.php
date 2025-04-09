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

//localhost:3306/lumen/public/movies
$router->get('/movies', 'MovieController@getAll');
$router->get('/movies/{id}', 'MovieController@getAllOne');
$router->post('/movies/add', 'MovieController@save');
$router->post('/movies/edit/{id}', 'MovieController@update');
$router->delete('/movies/delete/{id}', 'MovieController@delete');

$router->get('/credits', 'CreditController@getAll');
$router->get('/credits/{id}', 'CreditController@getAllOne');
$router->post('/credits/add', 'CreditController@save');
$router->post('/credits/edit/{id}', 'CreditController@update');
$router->delete('/credits/delete/{id}', 'CreditController@delete');