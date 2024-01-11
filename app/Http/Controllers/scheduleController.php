<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use Illuminate\Support\Facades\Auth;

class scheduleController extends Controller
{
    public function show(){
        if (Auth::check()) {
            $reservations = reservation::all();
            
            $timeSlots = [
                ['time' => '8.00am - 10.00am'],
                ['time' => '10.00am - 12.00pm'],
                ['time' => '12.00pm - 2.00pm'],
                ['time' => '2.00pm - 4.00pm'],
                ['time' => '4.00pm - 6.00pm'],
                ['time' => '6.00pm - 8.00pm'],
                ['time' => '8.00pm - 10.00pm'],
            ];

            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

            return view('menu.schedule', compact('reservations', 'timeSlots', 'days'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
