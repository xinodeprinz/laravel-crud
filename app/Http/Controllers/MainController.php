<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'required|image',
        ]);

        $data['photo'] = $request->file('photo')->store('profiles', 'public');

        Product::create($data);

        return redirect()->route('index');
    }

    public function update(Request $request, int $id) {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('index');
        }
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'nullable|image',
        ]);

        if ($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store('profiles', 'public');
        }

        $product->update($data);

        return redirect()->route('index');
    }

    public function destroy(int $id) {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('index');
        }

        $product->delete();
        return back();
    }
}
