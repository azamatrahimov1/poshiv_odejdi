<?php

namespace App\Http\Controllers;

use App\Models\Ready;
use Illuminate\Http\Request;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readies = Ready::all();
        return view('admin.ready.index', compact('readies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ready.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required',
            'image' => 'required'
        ]);

        $date = new Ready();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $date['name'] = $request->name;
            $date['text'] = $request->text;
            $date['image'] = $filename;
        }
        $date->save();
        return redirect()->route('ready.index')->with('success', 'Ready created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $readies = Ready::all();
        return view('ready', compact('readies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ready $ready)
    {
        return view('admin.ready.edit', compact('ready'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ready $ready)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required',
        ]);

        if ($request->file('thumbnail')){
            $file=$request->file('thumbnail');
            $filename=date('YmgHi').$file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $ready['name']=$request->name;
            $ready['text']=$request->text;
            $ready['image']=$filename;
        }

        $ready->save();
        return redirect()->route('ready.index')->with('success', 'Ready updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ready $ready)
    {
        $ready->delete();
        return redirect()->route('ready.index')->with('success', 'Ready deleted successfully');
    }
}
