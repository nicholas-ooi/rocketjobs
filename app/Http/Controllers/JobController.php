<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs;
use Auth;

class JobController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getNewJob(Request $request)
    {
      return view("pages.newJob");
    }
    public function addJob(Request $request)
    {
        $user = Auth::User();
        $job = new Jobs();
        $job->employer_id = $user->id;
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->save();
        $imageName = $job->id.".". $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/images/job/', $imageName
        );

        die();

    }
}
