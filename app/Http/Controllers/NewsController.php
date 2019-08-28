<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function getNews()
    {
        return view('news', ['news' => News::all()]);
    }
}
