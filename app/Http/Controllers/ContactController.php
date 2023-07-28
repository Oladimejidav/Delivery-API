<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail; // Update the use statement for the Mail facade

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        // Send mail to sales
        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function ($message) use ($input) {
            $message->from($input['email']);
            $message->to('sales@dashex.com.ng', 'Sales')->subject($input['subject']);
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}