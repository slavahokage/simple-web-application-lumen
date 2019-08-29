<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function getBlogs(Request $request)
    {
        $blogs = DB::table('blogs')->paginate(5);

        return view('blogs', compact('blogs'));
    }

    public function getBlogById($id)
    {
        $blog = Blogs::find($id);

        return view('blog', ['blog' => $blog]);
    }
}
