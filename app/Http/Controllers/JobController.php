<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\AlchemyAPI;
use App\Libraries\APIClient;
use App\Libraries\TextApi;

use App\JobsImages;
use App\Jobs;
use App\JobKeywords;
use Auth;
use Redirect;
use Session;
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

  public function getJobsJson()
  {
    $jobs = Jobs::all();
    return $jobs->toJson();
  }


  public function addJob(Request $request)
  {

    $alchemyapi = new AlchemyAPI("86bca693566ebe93c21c2793279a0876279399d0");


    $user = Auth::User();
    $job = new Jobs();
    if($user && Auth::check())
    {
      $job->employer_id = $user->id;
      $job->title = $request->input('title');
      $job->description = $request->input('description');
      $job->save();

      try {
        $files = $request->file("images");
      } catch (\Exception $e) {
      }
      foreach($files as $file) {

        $imageName = $job->id.".". $file->getClientOriginalExtension();

        $file->move(base_path() . '/public/images/job/', $imageName);

        $jobImage = new JobsImages();
        $jobImage->job_id = $job->id;
        $jobImage->src = $imageName;
        $jobImage->save();

        $response = $alchemyapi->image_keywords('url',base_path() . '/public/images/job/'.$imageName, null);
        $keywords = $response['imageKeywords'];
        foreach($keywords as $key)
        {
          $jobKey = new JobKeywords();
          $jobKey->job_id = $job->id;
          $jobKey->keyword = $key["text"];
          $jobKey->score = $key["score"];
          $jobKey->sentiment = "";
          $jobKey->save();
        }
      }

      $response = $alchemyapi->keywords('text', $job->title, array('sentiment'=>1));
      if($response["keywords"])
      {
      foreach ($response['keywords'] as $key) {
        $jobKey = new JobKeywords();
        $jobKey->job_id = $job->id;
        $jobKey->keyword = $key['text'];
        $jobKey->score = $key['relevance'];
        $jobKey->sentiment = $key['sentiment']['type'];
        $jobKey->save();
      }
    }
    if($response["keywords"])
    {
      $response = $alchemyapi->keywords('text', $job->description, array('sentiment'=>1));
      foreach ($response['keywords'] as $key) {
        $jobKey = new JobKeywords();
        $jobKey->job_id = $job->id;
        $jobKey->keyword = $key['text'];
        $jobKey->score = $key['relevance'];
        $jobKey->sentiment = $key['sentiment']['type'];
        $jobKey->save();
      }
    }

      }

    $API_KEY = "8a2318b0-d121-11e5-8378-4dad29be0fab";
    $BASE_PATH = "http://api.cortical.io/rest";
    $RETINA_NAME = "en_associative";
    $apiClient = new APIClient($API_KEY, $BASE_PATH);
    $textApi = new TextApi($apiClient);

    $keywords = $textApi->getKeywordsForText($job->description,"en_associative");
    foreach ($keywords as $key) {
      $jobKey = new JobKeywords();
      $jobKey->job_id = $job->id;
      $jobKey->keyword = $key;
      $jobKey->score = "";
      $jobKey->sentiment = "";
      $jobKey->save();
    }

      Session::flash('success', 'Job added successfully.');

    return view("pages.newJob");

  }
}
