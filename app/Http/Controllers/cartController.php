<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function checkoutConfirm(Request $request)
    {

         $this->validate($request, [
            'name' => 'required',
            'firstName' => 'required',
            'secondName' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);

        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->firstName, $request->secondName, $request->phone, $request->email);
        if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку, с вами скоро свяжутся');
        }else{
            session()->flash('warning', 'Произошла непредвиденая ошибка!');
        }

        return redirect()->route('index');
    }

    public function checkout()
    {

        $categories = Category::get();

        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('checkout', compact('categories', 'order'));
    }


    public function cart()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            return view('cart_place', compact('categories', 'order'));
        }
        return redirect()->route('index');
    }

    public function cartAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $orderId = Order::create()->id;
            session(['orderId' => $orderId]);
        }
        $order = Order::find($orderId);

        if ($order->productPivot->contains($productId)) {
            $pivotRow = $order->productPivot()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->Update();
        } else {
            $order->productPivot()->attach($productId);
        }

        return redirect()->route('cart');
    }

    public function cartRemoveAllRow($productId)
    {
        $orederId = session('orderId');
        if (is_null($orederId)) {
            return redirect()->route('cart');
        }
        $order = Order::find($orederId);
        if ($order->productPivot->contains($productId)) {
            $order->productPivot()->detach($productId);
        }
        return redirect()->route('cart');
    }

    public function cartRemove($productId)
    {
        $orederId = session('orderId');
        if (is_null($orederId)) {
            return redirect()->route('cart');
        }
        $order = Order::find($orederId);
        if ($order->productPivot->contains($productId)) {
            $pivotRow = $order->productPivot()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->productPivot()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->Update();
            }
        }
        return redirect()->route('cart');
    }
}
