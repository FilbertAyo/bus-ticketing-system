<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomController extends Controller
{
    public function customers(){
        $customers = Customer::all();
        return view("customers",[
            "customer"=> $customers
        ]);
    }
    public function customer(request $Request){

        $data = New Customer();
        $data->first_cname = $Request->fname;
        $data->last_cname= $Request->lname;
        $data->contacts = $Request->contacts;



        $data->save();
        return redirect()->back();

    }
}
