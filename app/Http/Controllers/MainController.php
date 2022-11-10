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
        $orderId = session('orderId');
        $order = Order::find($orderId);
        return view('index', compact('categories','product', 'order'));
    }

    public function shop(){
        $categories = Category::get();
        $product = Product::get();
        $orderId = session('orderId');
        $order = Order::find($orderId);
        return view('shop', compact('categories', 'product', 'order'));
    }

    public function sign(){
        $categories = Category::get();
        return view('sign', compact('categories'));
    }


    public function category($category){
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $categories = Category::get();
        $category = Category::where('code', $category)->first();

        return view('shop_select', compact('category', 'categories', 'order'));
    }



}
