<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function logistic(Request $request) {
        $search = $request->input('search');
        $stock = $request->input('stock');
        $sort = $request->input('sort');
        $productsQuery = Product::query();
        if ($search) {
            $productsQuery->where('name', 'LIKE', '%' . $search . '%');
        }
        if ($stock === '1') {
            $productsQuery->where('stock', '>', 0);
        } elseif ($stock === '0') {
            $productsQuery->where('stock', 0);
        }
        if ($sort === 'stock') {
            $productsQuery->orderBy('stock');
        } elseif ($sort === 'name') {
            $productsQuery->orderBy('name');
        }
        $products = $productsQuery->get();
        return view('products.logistic', ['products' => $products]);
    }


    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'image' => 'nullable',
            'name' => 'required',
            'description' => 'required',
            'unit' => 'required',
            'stock' => 'required'
        ]);
        $newProduct = Product::create($data);

        return redirect(route('product.create'));
    }

    // public function store(Request $request) {
    //     $data = $request->validate([
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'name' => 'required',
    //         'description' => 'required',
    //         'unit' => 'required',
    //         'stock' => 'required'
    //     ]);
    
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('public/images');
    //         $data['image'] = $imagePath;
    //     }
    
    //     $newProduct = Product::create($data);
    
    //     return redirect(route('product.create'));
    // }
}
