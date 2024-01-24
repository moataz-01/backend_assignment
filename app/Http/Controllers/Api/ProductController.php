<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(25);
        return response()->json($products);
    }

    public function show($id) {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function store(StoreProductRequest $request) {
        $product = Product::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Quantity' => $request->Quantity,
            'description' => $request->description
        ]);
        $product->categories()->attach($request->category_id);
        return response()->json([
            'message' => 'created successfully',
            'data' => $product
        ]);
    }
}
