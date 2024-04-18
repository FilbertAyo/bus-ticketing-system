<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::orderBy('created_at','DESC')->get();
        $busNumber = Bus::all();

        return view('layout.routes',compact('routes','busNumber'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.routes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $busNumber = Bus::all();

        Route::create($request->all());
        return redirect()->route('routes.index')->with('success',"Route added successfully");

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
        $routes= Route::findOrFail($id);

        $routes->delete();

        return redirect()->route('routes.index')->with('success',"Route deleted successfully");

    }
}
