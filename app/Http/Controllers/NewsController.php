<?php

namespace App\Http\Controllers;

use App\Http\Request\NewsStoreRequest;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews()
    {
        return view('news', ['news' => News::all()]);
    }

    public function new(Request $request)
    {
        $errors = $request->session()->get('errors');

        return view('create-news', ['errors' => $errors]);
    }

    public function store(NewsStoreRequest $request)
    {
        News::create($request->all());

        return redirect()->route('news');
    }
}
