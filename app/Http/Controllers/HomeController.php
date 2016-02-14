<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Jobs;
use Auth;
use App\Mailing;
use App\User;

class HomeController extends Controller
{
    public function show() {

        if (Auth::check()) {
            $user = Auth::user();
            $user->status = 'available';
            $user->save();
            if ($user->type === 'employer') {

              $jobs = Jobs::where("employer_id","=",$user->id)->get();

              return view('pages.employerDashboard',array("user"=>$user,"jobs"=>$jobs));
            } else if ($user->type === 'employee') {


              $jobs = $user->jobPosts()->orderByRaw("RAND()")->get();
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
        //Jobs
            //id
            //employer_id
            //title
            //desc
            //users
    }

    public function getEmployeeJobOffers(Request $request)
    {
      $user = Auth::user();

      $jobs = $user->jobPosts()->get();
      return view('pages.employeeJobOffer',array("jobs"=>$jobs));
    }

    public function approveJob(Request $request)
    {
          $user = Auth::user(); //employer
          $job = Jobs::find($request->input("job_id"));
          $employee = User::first($request->input("employee_id"));
          $job->users()->sync([$user->id => ['status' => "approved"]]);


        $mailing = new Mailing();
        $mailing->sendApprovedOrDenied($employee, $user, $job, 'Approved');
          return redirect('/applicants');
    }

    public function declineJob(Request $request)
    {
          $user = Auth::user(); //employer
          $job = Jobs::find($request->input("job_id"));
        $employee = User::first($request->input("employee_id"));
          $job->users()->sync([$user->id => ['status' => "decline"]]);
        $mailing = new Mailing();
        $mailing->sendApprovedOrDenied($employee, $user, $job, 'Approved');
          return redirect('/applicants');
    }

    //From employee
    public function requestJob(Request $request)
    {

        $user = Auth::user(); //employee
        $job = Jobs::find($request->input("job_id"));
        $job->users()->attach($user->id,['status' => "requesting"]);
        $mailing = new Mailing();
        $mailing->sendRequest($user, $job->user, $job);
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
