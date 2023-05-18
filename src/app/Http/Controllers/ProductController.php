<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Products;
        $product->title = $request->input('title');
        $product->description = $request->input('description');

        if ($request->file('img')) {
            $path = $request->file('img')->store('public/products');
            $product->img = Storage::url($path);
        }

        $product->save();

        return redirect()->route('home');
    }
}
