<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function buses(){


        return view("buses");
    }

    public function saveBuses(request $Request){
        $data = New Bus();
        $data->bus_number = $Request->busNumber;


        $data->save();
        return redirect()->back();


    }
}
