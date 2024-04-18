<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

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
        Bus::create($request->all());
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
