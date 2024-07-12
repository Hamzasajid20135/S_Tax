<?php

// app/Http/Controllers/FeedbackController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('contact_us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    public function user_messages()
    {
        $feedbacks = Feedback::all();
        return view('user_messages', compact('feedbacks'));
    }
}

