<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Libraries\AlchemyAPI;

class AlchemyController extends Controller
{

    public function showResult()
    {
          $alchemyapi = new AlchemyAPI("86bca693566ebe93c21c2793279a0876279399d0");
          $response = $alchemyapi->image_keywords('url',"", null);
          
          $data = array("keywords"=>$response['imageKeywords']);

        return view('pages.alchemy');
    }
}
