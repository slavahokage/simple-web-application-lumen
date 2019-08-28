<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function getBlogs(Request $request)
    {
        $page = $request->input('page');

        $blogs = empty($page) ? Blogs::all() : DB::table('blogs')->paginate(5);

        return view('blogs', ['blogs' => $blogs]);
    }
}