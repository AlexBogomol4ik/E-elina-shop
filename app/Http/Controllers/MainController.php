<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        $categories = Category::get();
        $product = Product::get();
        return view('index', compact('categories','product'));
    }

    public function productDetails($id){
        $categories = Category::get();
        $product_id = Product::where('id', $id)->first();
        return view('product_details', compact('categories', 'product_id'));
    }

    public function shop(){
        $categories = Category::get();
        $product = Product::get();
        return view('shop', compact('categories', 'product'));
    }

    public function sign(){
        $categories = Category::get();
        return view('sign', compact('categories'));
    }

    public function register(){
        $categories = Category::get();
        return view('auth.register', compact('categories'));
    }


    public function category($category){
        $categories = Category::get();
        $category = Category::where('code', $category)->first();
        return view('shop_select', compact('category', 'categories'));
    }



}
