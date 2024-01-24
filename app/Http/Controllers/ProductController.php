<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(25);
        return view('product.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function create() {
        $categories = Category::all(['id', 'name']);
        return view('product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request) {
        $product = Product::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'description' => $request->description
        ]);
        $product->categories()->attach($request->category_id);
        return redirect()->route('product.show', $product->id);
    }
}
