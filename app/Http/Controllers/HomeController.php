<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function about()
    {
        $categories = Category::get();
        return view('about', compact('categories'));
    }

    public function productDetails($id)
    {
        $categories = Category::get();
        $product_id = Product::where('id', $id)->first();
        return view('product_details', compact('categories', 'product_id'));
    }

    public function shop(Request $request)
    {

        $categories = Category::get();
        $productsQuery = Product::with('category');
        preg_match_all('!\d+!', $request->price, $numbers);

        if ($request->filled('price')) {

            $productsQuery->where('price', '>=', $numbers[0][0]);
        }
        if ($request->filled('price')) {

            $productsQuery->where('price', '<=', $numbers[0][1]);
        }

        $CategoryKeys = $request->keys();
        $priceFiled = array_pop($CategoryKeys);
        unset($priceFiled);

        foreach ($CategoryKeys as $field){
            if ($request->has($field)) {
                $productsQuery->where('code', $field)->orWhere('code', $field)->orWhere('code', $field);
            }
        }

        $products = $productsQuery->paginate(15)->withPath("?" . $request->getQueryString());
        return view('shop', compact('categories', 'products'));
    }


    public function register()
    {
        $categories = Category::get();
        return view('auth.register', compact('categories'));
    }

    public function index(Request $request)
    {
        $categories = Category::get();
        $product = Product::get();

        return view('index', compact('categories', 'product'));
    }

    public function productListAjax()
    {
        $product = Product::select('name')->get();
        $data = [];
        foreach ($product as $item) {
            $data[] = $item['name'];
        }
        return $data;
    }

    public function searchProduct(Request $request)
    {

        $categories = Category::get();
        $search_product = $request->all();
        $params['name'] = $search_product;
        if ($params != '') {
            $product_id = Product::where('name', $params)->first();
            if ($product_id) {
                return view('product_details', compact('categories', 'product_id'));
            } else {
                return redirect()->route('index');
            }
        }

    }

    public function searchProductAdmin(Request $request)
    {

        $orders = Order::get();
        $search_product = $request->all();
        $params['name'] = $search_product;
        if ($params != '') {
            $product_id = Product::where('name', $params)->first();
            if ($product_id) {
                return view('products.show', compact( 'product_id', 'orders'));
            } else {
                return redirect()->route('index');
            }
        }

    }


    /**
     * Show the application dashboard.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
