<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChefStoreRequest;
use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::all();
        return view('chef.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChefStoreRequest $request)
    {
        $imagePath = 'storage/' .  $request->file('image')->store('postImage' ,'public');
        $name = $request->input('name');
        $chef = new Chef();
        $chef->name = $name;
        $chef->image = $imagePath;
        $chef->save();

        return redirect()->route('chefs.index')->with('success', 'Chef created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('chef.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChefStoreRequest $request, Chef $chef)
    {
        $name = $request->input('name');
        $imagePath = 'storage/' .  $request->file('image')->store('postImages' ,'public');

        $chef->name = $name;
        $chef->image = $imagePath;
        $chef->save();
        return redirect()->route('chefs.index')->with('success', 'Chef updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->route('chefs.index')->with('success', 'Chef deleted');
    }
}
