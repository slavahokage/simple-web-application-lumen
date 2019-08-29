<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function getBlogs(Request $request)
    {
        $blogs = DB::table('blogs')->paginate(5);

        return view('blogs', compact('blogs'));
    }
}
