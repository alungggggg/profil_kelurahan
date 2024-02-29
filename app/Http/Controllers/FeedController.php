<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    //
    public function add(Request $request)
    {
        $request->validate([
            'email' => ['email'],
            'message' => ['required'],
        ]);

        feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    }
    public function delete()
    {
        $feed = feedback::findOrFail();
        $feed->delete();
    }
}
