<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use League\CommonMark\Node\Query\OrExpr;

class BasketController extends Controller
{

    public function checkout(){
        $categories = Category::get();

        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('checkout', compact('categories' , 'order'));
    }


    public function cart()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('cart_place', compact('categories', 'order'));
    }

    public function cartAdd($productId)
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if(is_null($orderId)){
            $orderId = Order::create()->id;
            session(['orderId' => $orderId]);
        }
        $order = Order::find($orderId);

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
