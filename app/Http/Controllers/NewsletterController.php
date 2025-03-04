<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new SubscriptionConfirmation());

        // Redirect back with a success message
        return back()->with('success', 'Thanks for subscribing!');
    }
}
