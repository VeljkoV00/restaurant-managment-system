<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $chefs = Chef::latest()->take(3)->get();
        $foods = Food::all();
        $categories = Category::all();
        return view('home', compact('chefs', 'foods', 'categories',));
    }
}
