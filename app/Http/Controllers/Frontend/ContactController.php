<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        $img_path = 'frontend/images/';

        return view('frontend.contact.index', compact('img_path'));

    }

    public function send(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:50',
                'email'   => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|min:10',
                ]);

            Message::create($validated);

            return back()->with('success', 'Thank you for sending us your message!<br>Please wait for our response!');
        } catch (Exception $e) {

            return back()->with('failed', 'Something went wrong.<br>Please check your internet connection or try again later.');
        }
    }
}
