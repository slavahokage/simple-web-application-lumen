<?php

namespace App\Http\Controllers;

class ContactsController extends Controller
{
    protected const CONTACTS = ['first contact', 'second contact', 'third contact'];

    public function getContacts()
    {
        return json_encode(self::CONTACTS);
    }
}
