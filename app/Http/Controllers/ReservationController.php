<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index(){

        return view('reservation.index');
    }
    public function store(ReservationStoreRequest $request){

         Reservation::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'message' => $request->message,
            'number' => $request->number,
            'time' => date('Y-m-d H:i:s' , strtotime($request->time)),
            'num_guests' => $request->num_guests
            
        ]);

      
    }
}
