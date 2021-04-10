<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomersilController extends Controller
{
    public function index()
    {
        return view('pages.komersil');
    }
}
