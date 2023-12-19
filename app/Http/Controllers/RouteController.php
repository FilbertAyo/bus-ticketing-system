<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function routes(){
        return view('routes');
    }

    public function route(request $Request){
        $data = New Route();
        $data->from_city = $Request->fromCity;
        $data->to_city = $Request->toCity;
        $data->bus_number = $Request->busNumber;
        $data->departure_date = $Request->departureDate;
        $data->departure_time = $Request->departureTime;


        $data->save();
        return redirect()->back();

    }
}
