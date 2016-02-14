<?php

namespace App\Http\Controllers;

use App\Jobs;
use Auth;

class HomeController extends Controller
{
    public function show() {

        $jobs = Jobs::all();

        if (Auth::check()) {
            return view('pages.userJobSearch',array("jobs"=>$jobs));
        }
        return view('pages.home');
    }

}
