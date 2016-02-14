<?php

namespace App\Http\Controllers;


use Auth;

class HomeController extends Controller
{
    public function show() {

        if (Auth::check()) {
            return view('pages.userHome');
        }
        return view('pages.home');
    }

}