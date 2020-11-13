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
use App\Http\Controllers\UsersController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->post('/register','UsersController@register');

$router->get('/users', 'UsersController@index');
$router->post('/users/delete', 'UsersController@delete');
$router->get('/users/{id}', 'UsersController@show');

$router->get('/books', 'BooksController@index');
$router->post('/books/add', 'BooksController@add');
$router->get('/books/{id}', 'BooksController@show');

$router->get('/checkouts', 'CheckoutsController@index');
$router->get('/checkouts/active', 'CheckoutsController@active');
$router->get('/checkouts/{id}', 'CheckoutsController@show');
$router->post('/return_book', 'CheckoutsController@return_book');
