<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    
   public function showProfile()
   {
       if (Auth::check()) {
           $user_id = Auth::id();
           $profile = User::where('id', $user_id)->get();
           return view('menu.profile', compact('profile'));
       }

       return redirect("login")->with('error', 'Need to login first');
   }

   public function editProfile(Request $profile)
    {
        $profile->validate([
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6',
            'existingpassword' => 'required',
        ]);

        $user = Auth::user();
        if(!Hash::check($profile->existingpassword, $user->password)) {
            return redirect()->route('menu.profile')->with('error', 'Existing password is incorrect');
        }
        // Check if the entered password matches the user's current password
        if (Hash::check($profile->password, $user->password)) {
            return redirect()->route('menu.profile')->with('error', 'New password cannot be the same as old password');
        }
        
        if ($profile->password != $profile->confirmpassword) {
            return redirect()->route('menu.profile')->with('error', 'Password and Confirm Password do not match');
        } 

        $user->password = Hash::make($profile->password);
        $user->save();

        if ($user) {
            return redirect()->route('menu.profile')->with('success', 'Successfully updated your password');
        } else {
            return redirect()->route('menu.profile')->with('error', 'Failed to update your password');
        }
        
    }

}
