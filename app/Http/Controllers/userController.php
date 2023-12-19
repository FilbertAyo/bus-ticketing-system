<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use app\Http\Controllers\Hash;

class userController extends Controller
{
    public function addUser(request $Request){

       // dd($Request->all());
        $data = New User();
        $data->first_name = $Request->firstName;
        $data->last_name = $Request->lastName;
        $data->phone_number = $Request->phoneNumber;
        $data->email = $Request->email;
        $data-> password = $Request->password;

        $data->save();
        return redirect()->back();

        // $data->password = Hash::make($Request->password);


    }
}
