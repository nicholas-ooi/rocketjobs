<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Jobs;
use Auth;

class HomeController extends Controller
{
    public function show() {

        if (Auth::check()) {
          $jobs = Jobs::all();
            return view('pages.userJobSearch',array("jobs"=>$jobs));
        }
        else {
          return view('pages.home');
        }
    }

    public function searchJob(Request $request)
    {
      if (Auth::check()) {
        $searchValue =  $request->input('searchValue');
        $jobs = Jobs::join('job_keywords', 'jobs.id', '=', 'job_keywords.job_id')
        ->where('title', 'LIKE', "%$searchValue%")
        ->where('keyword', 'LIKE', "%$searchValue%")
        ->select("jobs.*")
        ->groupBy('jobs.id')
        ->get();
        return view('pages.userJobSearch',array("jobs"=>$jobs));
      }
      else {
        return view('pages.home');
      }
    }


}