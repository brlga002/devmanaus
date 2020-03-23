<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('home',[]);
    }

    public function sendEmail(Request $request)
    {
        dd($request);
        return view('home',[]);
    }

    public function subscribe(Request $request)
    {
        dd($request);
        return view('home',[]);
    }
}