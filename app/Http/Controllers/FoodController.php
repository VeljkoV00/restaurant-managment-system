<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\FoodStoreRequest;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('food.index', compact('foods', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('food.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodStoreRequest $request)
    {
        $imagePath = 'storage/' .  $request->file('image')->store('postImages' ,'public');
        $name = $request->input('name');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $food = new Food();
        $food->name = $name;
        $food->price = $price;
        $food->category_id = $category_id;
        $food->description = $description;
        $food->image = $imagePath;
        $food->save();

        return redirect()->route('foods.index')->with('success', 'Food created');
        
 
 
       
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
    public function edit(Food $food)
    {
        $categories = Category::all();
        return view('food.edit', compact('food', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodStoreRequest $request, Food $food)
    {
        $imagePath = 'storage/' .  $request->file('image')->store('postImages' ,'public');
        $name = $request->input('name');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        
        $food->name = $name;
        $food->price = $price;
        $food->category_id = $category_id;
        $food->description = $description;
        $food->image = $imagePath;
        $food->save();

        return redirect()->route('foods.index')->with('success', 'Food updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('foods.index')->with('success', 'Food deleted');

    }
}
