<?php

namespace App\Http\Controllers;

use App\Jobs\sendEmails;
use App\Mail\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('spatial/contact');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'name'    => 'string|required',
            'email'   => 'email|required',
            'message' => 'required'
        ]);

        SendEmails::dispatch(new ContactUs(...$params));

        return redirect(route('contact'))->with('result', 'Message sent !');
    }
}
