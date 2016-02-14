<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        $imageName = "". $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/images/job/', $imageName
        );

        die();

    }
}
