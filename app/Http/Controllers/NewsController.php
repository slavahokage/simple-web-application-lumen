<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    protected const NEWS = ['first new', 'second new', 'third new'];

    public function getNews()
    {
        return json_encode(self::NEWS);
    }
}
