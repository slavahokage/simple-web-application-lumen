<?php

namespace App\Http\Controllers;

use App\Contacts;

class ContactsController extends Controller
{
    public function getContacts()
    {
        return view('contacts', ['contacts' => Contacts::all()]);
    }
}
