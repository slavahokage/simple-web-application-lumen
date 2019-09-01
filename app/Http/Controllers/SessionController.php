<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function createSession(Request $request)
    {
        $request->session()->regenerate();
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
    }
}