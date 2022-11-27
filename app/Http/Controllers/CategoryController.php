<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function redirect;
use function view;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        $categories = Category::get();
        return view('categories.adminCategories', compact('categories', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::where('status', 1)->get();
        return view('categories.form', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('categoriesImg');
        $params = $request->all();
        $params['image'] = $path;
        Category::create($params);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $orders = Order::where('status', 1)->get();
        return view('categories.show', compact('category', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $orders = Order::where('status', 1)->get();
        return view('categories.form', compact('category', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            Storage::delete($category->image);
            $params['image'] = $request->file('image')->store('categoriesImg');
        }
        $category->update($params);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
