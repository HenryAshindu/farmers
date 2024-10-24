<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('produce.index',  compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ProductData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required', 'mimes:png,jpg,webp']
        ]);

        $imagePath = $request->image->store('images', 'public');

        $NewProduct = Product::create([
            'name'=>$ProductData['name'],
            'description'=>$ProductData['description'],
            'price'=>$ProductData['price'],
            'image'=>$imagePath
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('produce.show',  compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ProductData = Product::findOrFail($id);
        return view('produce.edit', compact('ProductData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $ProductData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required', 'mimes:png,jpg,webp']
        ]);

        $imagePath = $request->image->store('images', 'public');
        $ProductData['image'] =  $imagePath;

        $product->update($ProductData);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ProductData = Product::findOrFail($id);
        $ProductData->delete();

        return redirect('/products');
    }

    public function all()
    {
        $products = Product::all();
        return view('produce.all', compact('products'));
    }
}
