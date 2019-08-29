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

$router->get('/news', 'NewsController@getNews')->name('news');

$router->get('/contacts', 'ContactsController@getContacts');

$router->get('/blogs', 'BlogsController@getBlogs');

$router->get('/blog/{id}', 'BlogsController@getBlogById');

$router->get('/posts', 'PostsController@getPosts');

$router->get('/news/new', 'NewsController@new')->name('create_news');

$router->post('/news/store', 'NewsController@store');
