<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function createFlash(Request $request)
    {
        $request->session()->flash('status', 'Task was successful!');

        return redirect()->route('display_flash');
    }

    public function displayFlash(Request $request)
    {
        $message = $request->session()->get('status');

        return view('display-flash', ['message' => $message]);
    }
}
