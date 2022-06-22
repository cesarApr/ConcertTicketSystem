<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
    	return view('pages.profile', array('user' => Auth::user()) );
    }

    public function upload(Request $request)
    {
        return $request->file('image')->store('post-images');
    }
}
