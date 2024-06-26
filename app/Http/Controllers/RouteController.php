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
        // $routes = Route::orderBy('created_at','DESC')->get();
        // $busNumber = Bus::all();

        $routes = Route::select('*', 'buses.bus_number')
        ->join('buses', 'buses.id', '=', 'routes.busNo')
        ->orderBy('routes.created_at', 'DESC')
        ->get();

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

    public function getDestinations(Request $request)
    {
        $source = $request->query('source');
        $destinations = Route::where('from_city', $source)->pluck('to_city');
        return response()->json($destinations);
    }

    public function getRouteDetails(Request $request)
    {
        $source = $request->query('source');
        $destination = $request->query('destination');
        $route = Route::where('from_city', $source)->where('to_city', $destination)->first();

        if ($route) {
            return response()->json([
                'busNo' => $route->busNo,
                'departure_date' => $route->departure_date,
                'departure_time' => $route->departure_time,
            ]);
        } else {
            return response()->json([
                'busNo' => '',
                'departure_date' => '',
                'departure_time' => '',
            ]);
        }
    }
}
