<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Mail\PromotionalEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PromotionalEmailController extends Controller
{
    public function create()
    {
        $customers = Customer::all();
        return view('create_promotional_email', compact('customers'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'recipients' => 'required|array',
        ]);

        $recipients = Customer::whereIn('id', $request->recipients)->get();

        foreach ($recipients as $recipient) {
            Mail::to($recipient->email)->send(new PromotionalEmail($request->subject, $request->content));
        }

        return redirect()->route('customers.index')->with('success', 'Promotional email sent successfully!');
    }
}
