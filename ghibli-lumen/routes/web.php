<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\ArticleController;

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

//http://localhost:8888/lumen/public

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/movies', 'MovieController@getAll');
$router->get('/movies/{id}', 'MovieController@getOne');
$router->post('/movies/add', 'MovieController@save');
$router->post('/movies/edit/{id}', 'MovieController@update');
$router->delete('/movies/delete/{id}', 'MovieController@delete');

$router->get('/credits', 'CreditController@getAll');
$router->get('/credits/{id}', 'CreditController@getAllOne');
$router->post('/credits/add', 'CreditController@save');
$router->post('/credits/edit/{id}', 'CreditController@update');
$router->delete('/credits/delete/{id}', 'CreditController@delete');


$router->options('/{any:.*}', function () {
    return response()->json([], 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
});


