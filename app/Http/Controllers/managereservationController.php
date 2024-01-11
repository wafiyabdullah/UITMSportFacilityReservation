<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use Illuminate\Support\Facades\Auth;

class managereservationController extends Controller
{

    public function show(){
        if (Auth::check()) {
            $user_id = Auth::id();
            $reservations = Reservation::with(['facility', 'court'])
                ->where('user_id', $user_id)
                ->get();
            return view('menu.managereservation', compact('reservations'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function destroy($id)
    {
        $reservation = reservation::find($id);
        $reservation->delete();
        return redirect()->route('managereservation.show')->with('error', 'Reservation has been cancelled');
    }
}
