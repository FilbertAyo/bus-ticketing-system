<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    public function books(){
        return view('bookings');
    }
    public function booking(request $Request){
        $data = New Booking();
        $data->name = $Request->fullName;
        $data->contact = $Request->contact;
        $data->source = $Request->source;
        $data->destination= $Request->destination;
        $data->bus_number = $Request-> busNumber;
        $data->seat_number = $Request->seatNumber;
        $data->amount = $Request->amount;


        $data->save();
        return redirect()->back();
    }
}
