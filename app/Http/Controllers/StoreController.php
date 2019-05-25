<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class StoreController extends Controller
{
    public function store()
    {
    	$categories = Category::has('products')->get();
    	return view('products.store')->with(compact('categories'));
    }
}


