<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function cartPlace()
    {
        $categories = Category::get();
        return view('cart_place', compact('categories'));
    }

    public function cart()
    {
        $categories = Category::get();
        $orederId = session('orderId');
        if (!is_null($orederId)) {
            $order = Order::findOrFail($orederId);
        }
        return view('cart_place', compact('categories', 'order'));
    }

    public function cartAdd($productId)
    {
        $categories = Category::get();
        $orederId = session('orderId');
        if (is_null($orederId)) {
            $orederId = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orederId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->Update();
        } else {
            $order->products()->attach($productId);
        }


        return redirect()->route('cart');

    }

    public function cartRemove($productId)
    {
        $categories = Category::get();
        $orederId = session('orderId');
        if (is_null($orederId)) {
            return redirect()->route('cart');
        }
        $order = Order::find($orederId);
        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->products()->detach($productId);
            }else{
                $pivotRow->count--;
                $pivotRow->Update();
            }
        }
        return redirect()->route('cart');
    }

}
