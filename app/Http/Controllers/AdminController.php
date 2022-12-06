<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users = User::all();
        return view('admin.dash', compact('users'));
    }

    public function display_res(){

        $reservations = Reservation::all();
        return view('reservation.index', compact('reservations'));
    }

    public function update(Reservation $reservation){

        $reservation->update([
            'status' => 'accepted'
        ]);
        return redirect()->route('reservation.index');
    }
}
