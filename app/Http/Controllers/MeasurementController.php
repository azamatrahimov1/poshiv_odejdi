<?php

namespace App\Http\Controllers;

use App\Models\Colour;
use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measurements = Measurement::all();
        return view('admin.measurement.index',compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colours = Colour::all();
        return view('admin.measurement.create', compact('colours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'growing'=>'required',
            'shoulder'=>'required',
            'hand'=>'required',
            'basin'=>'required',
            'legs'=>'required',
            'color'=>'required'
        ]);

        $colour = Colour::find($request->name);
        Measurement::create($request->all());
        $colour->save();
        return redirect()->route('card')->with('success','Measurement created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {
        return view('admin.measurement.show',compact('measurement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {
        return view('admin.measurement.edit',compact('measurement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Measurement $measurement)
    {
        $measurement->update($request->all());
        return redirect()->route('measurement.index')->with('success','Measurement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurement $measurement)
    {
        $measurement->delete();
        return redirect()->route('measurement.index')->with('success','Measurement deleted successfully');
    }
}
