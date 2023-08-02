<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contact_us');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send the contact us email
        Mail::to('your@email.com')->send(new ContactUsEmail($data));

        return redirect()->route('contact-us.create')->with('success', 'Your message has been sent successfully! We will get back to you shortly.');
    }
}
