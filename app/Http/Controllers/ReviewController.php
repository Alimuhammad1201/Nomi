<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function add_review(Request $request)
    {
       $request->validate([
            'product_id' => 'required|exists:products,id', // Make sure product exists in DB
            'rating' => 'required|integer|min:1|max:5', // Rating should be between 1 and 5
            'description' => 'required|string|max:500', // Review text should be required
            'name' => 'required|string|max:255', // Name required
            'email' => 'required|email', // Valid email required
        ]);

        // Save review to the database
        Review::create([
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->description,
            'name' => $request->name,
            'email' => $request->email,
        ]);

    //      $response = $request->input('g-recaptcha-response');
    // $secret = env('RECAPTCHA_SECRET_KEY');

    // $verifyResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //     'secret' => $secret,
    //     'response' => $response
    // ]);

    // $body = $verifyResponse->json();

    // if (!$body['success']) {
    //     return back()->withErrors(['captcha' => 'reCAPTCHA verification failed, please try again.']);
    // }

        return back()->with('success', 'Your review has been submitted!');
    }

    public function view_review()
    {
        $review = Review::With('product')->get();
      
        return view('admin.review.index', compact('review'));
    }

    public function review_update(Request $request, $id)
    {
         $review = Review::findOrFail($id);
         $review->update([
            'status' => $request->status
        ]);

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);

    }
}
