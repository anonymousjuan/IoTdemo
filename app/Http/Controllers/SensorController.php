<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate incoming data
         $request->validate([
            'obstacle' => 'required|integer',
        ]);

        // Insert into database
        $inserted = DB::table('ir_sensor')->insert([
            'obstacle' => $request->input('obstacle'),
            'created_at' => now(),
        ]);

        if ($inserted) {
            return response()->json(['message' => 'Data stored successfully!'], 200);
        } else {
            return response()->json(['error' => 'Database insertion failed!'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
