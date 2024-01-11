<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use Illuminate\Support\Facades\Auth;


class reservationController extends Controller
{
    public function store(Request $request){
        // Validate the form data
        $request->validate([
            'facility' => 'required',
            'court' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        // Check if a reservation already exists with the same details
        $existingReservation = reservation::where('facility_id', $request->facility)
        ->where('court_id', $request->court)
        ->where('day', $request->day)
        ->where('time', $request->time)
        ->first();

        if ($existingReservation) {
            return redirect()->route('reservation')->with('error', 'Slot not available');
        }
        
        // Create a new reservation record
        $reservation = new reservation();
        $reservation->user_id = Auth::id();
        $reservation->facility_id = $request->facility;
        $reservation->court_id = $request->court;
        $reservation->day = $request->day;
        $reservation->time = $request->time;
        $reservation->status = 'reserved';       
        $reservation->save();

        if($reservation){
            return redirect()->route('reservation')->with('success','Reservation successfully.');
        }
        else{
            return redirect()->route('reservation')->with('error','Reservation failed.');
        }
    }
    
}

    

