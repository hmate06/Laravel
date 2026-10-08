<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
       dd($request->all());
       return "ok";
    }
}
