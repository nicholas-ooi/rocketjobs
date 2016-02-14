<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Auth;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = User::find($id);
        $testimonials = DB::table('testimonials')->where('user_id', $user->id)->get();

        return view('pages.user')->with(['user' => $user, 'testimonials' => $testimonials]);

    }
    public function showAddTestimonial($id) {
        $user = User::find($id);
        return view('pages.testimonial')->with(['user' => $user]);
    }
    public function addTestimonial(Request $request)
    {
        if (Auth::check()) {
            $user=Auth::user();
            $testimonial = new Testimonials();
            $testimonial->user_id = $request->input('user_id');
            $testimonial->author_id = $user->id;
            $testimonial->title = $request->input('title');
            $testimonial->description = $request->input('description');
            $testimonial->save();
            return redirect('/user/'.$request->input('user_id'));
        } else {
            return redirect('/');
        }
    }
}
