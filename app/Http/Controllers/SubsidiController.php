<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubsidiController extends Controller
{
    public function index()
    {
        return view('pages.subsidi');
    }
}
