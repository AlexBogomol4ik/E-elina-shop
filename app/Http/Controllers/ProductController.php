<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function view;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        $products = Product::get();
        return view('products.adminProducts', compact('products', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $orders = Order::where('status', 1)->get();
        $products = Product::get();
        return view('products.form', compact( 'products', 'orders', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->all();
        if(!$request->has('firstImage')){
            $pathfirst = null;
        }else{
            $pathfirst = $request->file(['firstImage'])->store('productsImg');
        }

        if(!$request->has('secondImage')){
            $pathsecond = null;
        }else{
            $pathsecond = $request->file(['secondImage'])->store('productsImg');
        }

        if(!$request->has('thirdImage')){
            $paththird = null;
        }else{
            $paththird = $request->file(['thirdImage'])->store('productsImg');
        }

        if(!$request->has('fourthImage')){
            $pathfourth = null;
        }else{
            $pathfourth = $request->file(['fourthImage'])->store('productsImg');
        }

        if(!$request->has('fivethImage')){
            $pathfiveth = null;
        }else{
            $pathfiveth = $request->file(['fivethImage'])->store('productsImg');
        }

        $params['firstImage'] = $pathfirst;
        $params['secondImage'] = $pathsecond;
        $params['thirdImage'] = $paththird;
        $params['fourthImage'] = $pathfourth;
        $params['fivethImage'] = $pathfiveth;
        Product::create($params);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $orders = Order::where('status', 1)->get();
        return view('products.show', compact( 'product', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $orders = Order::where('status', 1)->get();
        return view('products.form', compact('product', 'orders', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $params = $request->all();

        unset($params['firstImage']);
        if($request->has('deleteFirstImage')){
            Storage::delete($product->firstImage);
            $params['firstImage'] = null;
        }
        if($request->has('firstImage')){

            if(!$product->firstImage == null){

                Storage::delete($product->firstImage);
                $params['firstImage'] = $request->file('firstImage')->store('productsImg');
            }
            $params['firstImage'] = $request->file('firstImage')->store('productsImg');
        }

        unset($params['secondImage']);
        if($request->has('deleteSecondImage')){
            Storage::delete($product->secondImage);
            $params['secondImage'] = null;
        }
        if($request->has('secondImage')){

            if(!$product->secondImage == null){

                Storage::delete($product->secondImage);
                $params['secondImage'] = $request->file('secondImage')->store('productsImg');
            }
            $params['secondImage'] = $request->file('secondImage')->store('productsImg');
        }

        unset($params['thirdImage']);
        if($request->has('deleteThirdImage')){
            Storage::delete($product->thirdImage);
            $params['thirdImage'] = null;
        }
        if($request->has('thirdImage')){

            if(!$product->thirdImage == null){

                Storage::delete($product->thirdImage);
                $params['thirdImage'] = $request->file('thirdImage')->store('productsImg');
            }
            $params['thirdImage'] = $request->file('thirdImage')->store('productsImg');
        }

        unset($params['fourthImage']);
        if($request->has('deleteFourthImage')){
            Storage::delete($product->fourthImage);
            $params['fourthImage'] = null;
        }
        if($request->has('fourthImage')){

            if(!$product->fourthImage == null){

                Storage::delete($product->fourthImage);
                $params['fourthImage'] = $request->file('fourthImage')->store('productsImg');
            }
            $params['fourthImage'] = $request->file('fourthImage')->store('productsImg');
        }

        unset($params['fivethImage']);
        if($request->has('deleteFivethImage')){
            Storage::delete($product->fivethImage);
            $params['fivethImage'] = null;
        }
        if($request->has('fivethImage')){

            if(!$product->fivethImage == null){

                Storage::delete($product->fivethImage);
                $params['fivethImage'] = $request->file('fivethImage')->store('productsImg');
            }
            $params['fivethImage'] = $request->file('fivethImage')->store('productsImg');
        }


        foreach(['new', 'salary', 'hit', 'recomend'] as $fieldName){
            if(!isset($params[$fieldName])){
                $params[$fieldName] = 0;
            }
        }

        $product->update($params);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
