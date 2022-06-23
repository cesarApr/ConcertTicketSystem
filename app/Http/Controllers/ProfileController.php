<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
    	return view('pages.profile', array('user' => Auth::user()) );
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('Profile');
        }

        User::where('id', auth()->user()->id)->update($validateData);

        return redirect('/profile')->with('Success', 'Picture Succesfully Added');
    }
}
