<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function resume()
    {
        return view('resume');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        // return $request->email;
        // return $request->text2;
        return view('contact', ['data' => $request]);
    }
}
