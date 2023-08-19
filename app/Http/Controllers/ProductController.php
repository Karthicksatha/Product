<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'product_name' => 'required',
        'unit_type' => 'required',
        'product_category' => 'required',
        'product_images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        'product_price' => 'required',
        'discount_percentage' => 'required',
        'discount_amount' => 'required',
        'discount_start_date' => 'required',
        'discount_end_date' => 'required',
        'tax_percentage' => 'required',
        'tax_amount' => 'required',
        'stock_entry' => 'required',
    ]);


    $uploadedImages = [];
    foreach ($request->file('product_images') as $image) {
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/product_images', $imageName);
        $uploadedImages[] = $imageName;
    }

    $product = new Product;
    $product->product_name = $request->product_name;
    $product->unit_type = $request->unit_type;
    $product->category = $request->product_category;
    $product->product_images = json_encode($uploadedImages); 
    $product->price = $request->product_price;
    $product->discount_percentage = $request->discount_percentage;
    $product->discount_amount = $request->discount_amount;
    $product->discount_range_from = $request->discount_start_date;
    $product->discount_range_to = $request->discount_end_date;
    $product->tax_percentage = $request->tax_percentage;
    $product->tax_amount = $request->tax_amount;
    $product->stock_entry = $request->stock_entry;
    $product->save();

    return redirect('/prodview');
}

public function showAll()
{
    $products = Product::all();
    return view('prodview', compact('products'));
}


    
}
