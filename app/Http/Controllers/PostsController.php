<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function getPosts(Request $request)
    {
        $postsStart = $request->input('postName');

        $posts = DB::table('posts')->where('name', 'like', "$postsStart%")->get();

        return view('posts', ['posts' => $posts]);
    }
}
