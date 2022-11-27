<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use http\Env\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $users = User::get();
        $categories = Category::get();
        $products = Product::get();
        $orders = Order::where('status', 1)->get();
        return view('dashboard', compact('orders', 'products', 'categories', 'users'));
    }

    public function adminOrders()
    {

        $orders = Order::where('status', 1)
            ->orWhere('status', 2)
            ->get();
        return view('adminOrders', compact('orders'));
    }

    public function archive()
    {
        $orders = Order::where('status', 3)->get();
        return view('adminOrders', compact('orders'));
    }

    public function archiveOrder($id){

        $order = Order::where('id', $id)->first();
        $params['status'] = 3;
        $order->update($params);
        return redirect()->route('admin-order');
    }


    public function adminShowOrder($id){

        $order = Order::where('id', $id)->first();
        return view('showOrder', compact('order'));
    }

    public function deleteOrder($id){

        $order = Order::where('id', $id)->first();
        $order->delete($order);
        return redirect()->route('admin-order');
    }

    public function deleteUser($id){

        $user = User::where('id', $id)->first();
        $user->delete($user);
        return redirect()->route('admin-user');
    }

    public function completeOrder($id){

        $order = Order::where('id', $id)->first();
        $params['status'] = 2;
        $order->update($params);
        return redirect()->route('admin-order');
    }

    public function adminUsers()
    {
        $orders = Order::where('status', 1)->get();
        $users = User::get();
        return view('adminUsers', compact('users','orders'));
    }

    public function adminCategories()
    {

    }
}
