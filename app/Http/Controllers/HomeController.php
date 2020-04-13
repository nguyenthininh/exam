<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create() {

        return view('contact_form');
    }

    public function store(Request $request) {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->address = $request->address;

        $contact->save();

        return response()->json(['success'=>'Form is successfully submitted!']);

    }
}
