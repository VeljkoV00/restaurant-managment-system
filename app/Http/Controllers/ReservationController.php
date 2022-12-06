<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function store(ReservationStoreRequest $request)
    {

        Reservation::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'message' => $request->message,
            'number' => $request->number,
            'time' => date('Y-m-d H:i:s', strtotime($request->time)),
            'num_guests' => $request->num_guests

        ]);

        return back()->with('success', 'Reservation has been recived');
    }

    public function index(){


        $reservations = Reservation::where('user_id', Auth::user()->id)->get();
        return view('reservation.usersreservation', compact('reservations'));
    }
}
