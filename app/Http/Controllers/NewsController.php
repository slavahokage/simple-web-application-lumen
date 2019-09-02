<?php

namespace App\Http\Controllers;

use App\Http\Request\NewsStoreRequest;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(Request $request)
    {
        $message = $request->session()->get('success');

        return view('news', ['news' => News::all(), 'message' => $message]);
    }

    public function new()
    {
        return view('create-news');
    }

    public function edit($id)
    {
        return view('news-edit', ['news' => News::find($id)]);
    }

    public function delete(Request $request)
    {
        News::find($request->input('id'))->delete();

        $request->session()->flash('success', 'successfully delete');

        return redirect()->route('news');
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->fill($request->all());
        $news->save();

        $request->session()->flash('success', 'successfully update');

        return redirect()->route('news');
    }

    public function store(NewsStoreRequest $request)
    {
        News::create($request->all());

        $request->session()->flash('success', 'successfully store');

        return redirect()->route('news');
    }

    public function show($id)
    {
        return view('news-display-one', ['news' => News::find($id)]);
    }
}
