<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function create(Request $request)
    {
        $data = $request->all();

        Message::create($data);

        return redirect()->route('contact');
    }
}
