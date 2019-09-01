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

    public function update($id)
    {
        $news = News::find($id);

        return view('news-update', ['news' => $news]);
    }

    public function delete(Request $request)
    {
        $news = News::find($request->input('id'));

        $news->delete();

        return redirect()->route('news');
    }

    public function store(NewsStoreRequest $request, $id = null)
    {
        $parameters = $request->all();

        if (isset($id)) {
            $news = News::find($id);
            $news->fill($parameters);
            $news->save();
        } else {
            News::create($request->all());
        }

        return redirect()->route('news');
    }
}
