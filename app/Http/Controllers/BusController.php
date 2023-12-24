<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bus;

class BusController extends Controller
{


    public function saveBuses(request $Request){
        $data = New Bus();
        $data->bus_number = $Request->busNumber;


        $data->save();
        return redirect()->back();
    }

    public function buses(){
        $buses = Bus::all();

             return view("buses",[
               "buses"=> $buses
             ]);
         }
}
