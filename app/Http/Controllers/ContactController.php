<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function SubmitInquiry(Request $request)
    {

        $validated =
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);
        return view('contact.thanks', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);
    }
    public function ContactForm()
    {
        return view('contact.form');
    }
}
