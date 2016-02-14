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
            $user->status = 'available';
            if ($user->type === 'employer') {

              $jobs = Jobs::where("employer_id","=",$user->id)->get();

              return view('pages.employerDashboard',array("user"=>$user,"jobs"=>$jobs));
            } else if ($user->type === 'employee') {


              $jobs = Jobs::orderByRaw("RAND()")->get();
                return view('pages.employeeDashboard',array("user"=>$user,"jobs"=>$jobs));
            } else {
                $jobs = Jobs::all();
                return view('pages.home', array("jobs" => $jobs));
            }
        }
        else {
          return view('pages.home');
        }
    }

    public function getApplicant(Request $request)
    {

      $job = Jobs::find($request->input("job_id"));
      return view('pages.applicant',array("job"=>$job));
    }

    public function getApplicants(Request $request)
    {
      $user = Auth::user();

      $jobs = Jobs::where("employer_id","=",$user->id)->get();
      return view('pages.applicants',array("jobs"=>$jobs));
    }

    public function approveJob(Request $request)
    {
          $user = Auth::user();
          $job = Jobs::find($request->input("job_id"));

          $job->users()->sync([$user->id => ['status' => "approved"]]);
          return redirect('/applicants');
    }

    public function declineJob(Request $request)
    {
          $user = Auth::user();
          $job = Jobs::find($request->input("job_id"));
          $job->users()->sync([$user->id => ['status' => "decline"]]);
          return redirect('/applicants');
    }

    public function requestJob(Request $request)
    {
          $user = Auth::user();
          $job = Jobs::find($request->input("job_id"));
          $job->users()->attach($user->id,['status' => "requesting"]);
          return redirect('/');
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
