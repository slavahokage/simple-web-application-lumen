<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    }

    public function delete($id)
    {

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|filled',
            'description' => 'required|filled',
        ]);

        if ($validator->fails()) {
            $request->session()->flash('errors', $validator->errors()->getMessages());
            setcookie('title', $request->input('title'));
            setcookie('description', $request->input('description'));

            return redirect()->route('create_news');
        }

        News::create($request->all());

        return redirect()->route('news');
    }
}
