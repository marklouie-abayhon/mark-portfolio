<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::to('marklouieabayhon@gmail.com')->send(new ContactFormMail($request->all()));

    return back()->with('success', 'Your message has been sent successfully!');
}

}
