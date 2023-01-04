<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function create() {
        return view('create');
    }

    public function update(int $id) {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('index');
        }
        return view('update', compact('product'));
    }
}
