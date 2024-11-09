<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Handle the form submission (e.g., send an email or store in database)

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function index(){
        return view('contact');
    }
}
