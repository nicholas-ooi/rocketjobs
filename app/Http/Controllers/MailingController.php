<?php
/**
 * Created by PhpStorm.
 * User: padlet
 * Date: 2/13/16
 * Time: 5:16 PM
 */

namespace App\Http\Controllers;

use Log;
use App\Http\Requests\Request;
use App\Mailing;

class MailingController extends Controller
{
    public function inbound(Request $request)
    {
        dd($request);
    }
}