<?php

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

$router->get('/', function () use ($router) {
    return 'Hello world!';
});

$router->get('/news', ['as' => 'news', 'uses' => 'NewsController@getNews']);

$router->get('/contacts', 'ContactsController@getContacts');

$router->get('/blogs', 'BlogsController@getBlogs');

$router->get('/blog/{id}', 'BlogsController@getBlogById');

$router->get('/posts', 'PostsController@getPosts');

$router->get('/news/new', ['as' => 'create_news', 'uses' => 'NewsController@new']);

$router->post('/news/store[/{id}]', 'NewsController@store');

$router->post('/news/delete', 'NewsController@delete');

$router->get('/news/update/{id}', 'NewsController@update');

$router->get('/products/new', 'ProductsController@addProducts');

$router->get('/products/show', ['as' => 'products_show', 'uses' => 'ProductsController@displayProducts']);

$router->post('/products/store', 'ProductsController@storeProducts');

$router->post('/products/delete', 'ProductsController@deleteProducts');

$router->post('/session/create', 'SessionController@createSession');

$router->delete('/session/delete', 'SessionController@deleteSession');