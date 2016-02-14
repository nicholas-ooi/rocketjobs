<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Jobs;
use Auth;

class HomeController extends Controller
{
    public function show() {

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->type === 'employer') {
              return view('pages.employerDashboard',array("user"=>$user));
            } else if ($user->type === 'employee') {
                return view('pages.employeeDashboard',array("user"=>$user));
            } else {
                $jobs = Jobs::all();
                return view('pages.HomeController', array("jobs" => $jobs));
            }
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
        ->orWhere('keyword', 'LIKE', "%$searchValue%")
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
