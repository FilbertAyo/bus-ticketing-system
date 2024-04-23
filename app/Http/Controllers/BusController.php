<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $buses = Bus::orderBy('created_at','DESC')->get();

        return view('layout.buses',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.buses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

           // Retrieve the authenticated user's ID
    $userId = Auth::id();

    // Merge the user_id into the request data
    $requestData = array_merge($request->all(), ['user_id' => $userId]);


        Bus::create($requestData);
        return redirect()->route('buses.index')->with('success',"Bus added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buses= Bus::findOrFail($id);

        $buses->delete();

        return redirect()->route('buses.index')->with('success',"Bus deleted successfully");

    }
}
