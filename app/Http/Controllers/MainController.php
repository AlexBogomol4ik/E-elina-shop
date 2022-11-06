<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $categories = Category::get();
        $product = Product::get();
        return view('index', compact('categories','product'));
    }

    public function sign(){
        $categories = Category::get();
        return view('sign', compact('categories'));
    }


    public function category($category){
        $categories = Category::get();
        $category = Category::where('code', $category)->first();
        return view('shop', compact('category', 'categories'));
    }



}
