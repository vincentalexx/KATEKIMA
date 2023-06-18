<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\product_action;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function logistic(Request $request) {
        $search = $request->input('search');
        $stock = $request->input('stock');
        $sort = $request->input('sort');
        $category = $request->input('category');
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
        if ($category) {
            $productsQuery->where('category', 'LIKE', '%' . $category . '%');
        }
        $products = $productsQuery->get();
        return view('products.logistic', ['products' => $products]);
    }

    public function inbound() {
        $products = Product::all();
        return view('products.inbound', ['products' => $products]);
    }

    public function add(Request $request) {
        $productId = $request->input('product');
        $quantity = $request->input('quantity');
        $product = Product::find($productId);
        if ($product) {
            if ($quantity > 0) {
                $product->stock += $quantity;
                $product->save();

                $data = [
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'date' => $request->input('date'),
                    'status' => $request->input('status')
                ];

                $newProductAction = product_action::create($data);

                return redirect()->back()->with('success', 'Stock updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Invalid quantity.');
            }
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }

    public function outbound() {
        $products = Product::all();
        return view('products.outbound', ['products' => $products]);
    }

    public function substract(Request $request) {
        $productId = $request->input('product');
        $quantity = $request->input('quantity');

        $product = Product::find($productId);

        if ($product) {
            if ($quantity > 0 && $product->stock - $quantity >= 0) {
                $product->stock -= $quantity;
                $product->save();

                $data = [
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'date' => $request->input('date'),
                    'status' => $request->input('status')
                ];

                $newProductAction = product_action::create($data);
                return redirect()->back()->with('success', 'Stock updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Invalid quantity.');
            }
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }


    public function create() {
        return view('products.create');
    }


    public function store(Request $request) {
        $stock = 0;
        $data = $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'name' => 'required',
            'description' => 'required',
            'unit' => 'required',
            'category' => 'nullable',
            'date' => 'required'
        ]);


        $image_file = $request->file('image');
        $image_exstension = $image_file->extension();
        $image_name = date('ymdhis').".". $image_exstension;
        $image_file->move(public_path('image'), $image_name);

        $data = [
            'image' => $image_name,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'unit' => $request->input('unit'),
            'stock' => $stock,
            'category' => $request->input('category'),
            'date' => $request->input('date')
        ];

        $newProduct = Product::create($data);

        return redirect(route('product.logistic'));
    }

    public function logisticdetails($id){
        $products = Product::where('id', $id)->first();
        return view('products.logistic-details')->with('products', $products);
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect(route('product.logistic'));
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            // 'image' => 'required|mimes:jpeg,png,jpg,gif',
            'name' => 'required',
            'description' => 'required',
            'unit' => 'required',
            'stock' => 'required|integer|min:0'
        ]);
        // dd($request);
        $product->update($data);
        return redirect(route('product.logistic'));
    }

    public function history(){
        $products = Product::all();
        $product_action = product_action::all();
        return view('products.history', ['products' => $products], ['product_action' => $product_action]);
    }

    public function searchHistory(Request $request) {
        // $dateFrom = $request->input('dateFrom');
        // $dateTo = $request->input('dateTo');
        // $product = Product::whereBetween('date', [$dateFrom, $dateTo])->get();
        // if ($product) {
        //     return redirect()->back()->with(['product' => $product], 'All data has been shown.');
        // } else {
        //     return redirect()->back()->with('error', 'Data not found.');
        // }

        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $products = Product::all();
        if ($dateFrom == NULL || $dateTo == NULL) {
            $product_action = product_action::all();
        }
        else{
            $product_action = product_action::whereBetween('date', [$dateFrom, $dateTo])->get();

        }

        return view('products.history', ['products' => $products], ['product_action' => $product_action]);
        // if ($products) {
        // } else {
        //     return redirect()->back()->with('error', 'Data not found.');
        // }
        // dd($request);
    }

    public function report(){
        $products = Product::all();
        $product_action = product_action::all();
        return view('products.reportt', ['products' => $products], ['product_action' => $product_action]);
    }

    // public function searchReport(Request $request) {
    //     $date = $request->input('date');
    //     $year = date('Y', strtotime($date));
    //     $month = date('m', strtotime($date));
    //     $products = Product::all();
    //     if ($date == NULL) {
    //         // dd($request);
    //         $product_action = product_action::all();
    //     }
    //     else{
    //         $product_action = product_action::whereMonth('date', '=', $date)->whereYear('date', '=', $date);
    //         $product_action = product_action::whereYear('date', '=', $year)->whereMonth('date', '=', $month)->get();
    //         // dd($request);
    //     }

    //     return view('products.reportt', ['products' => $products], ['product_action' => $product_action]);
    // }
    public function searchReport(Request $request) {
        $date = $request->input('date');
        $year = date('Y', strtotime($date));
        $month = date('m', strtotime($date));
    
        if ($date == null) {
            $product_action = product_action::all();
        } else {
            $product_action = product_action::whereYear('date', $year)->whereMonth('date', $month)->get();
        }
    
        $products = Product::all();
    
        return view('products.reportt', [
            'products' => $products,
            'product_action' => $product_action
        ]);
    }
    
}
