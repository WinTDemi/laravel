<?php

namespace App\Http\Controllers;

use GraphQL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use App\Models\Manufacturers;
use App\Http\Requests\formProducts;

class ProductController extends Controller
{
    public function store(formProducts $request)
    {
// dd($request);
$validated = $request->validated();
// dd($validated);
// if ($validated->fails()) {
//     return response()->json([
//         'message' => 'The given data was invalid.',
//         'errors' => $validated->errors()->all()
//     ], 422);
// }


        $product = new Products;
        $product->title = $request->input('title');
        $product->description = $request->input('description');

        if ($request->file('img')) {
            $path = $request->file('img')->store('public/products');
            $product->img = Storage::url($path);
        }

        // $product->manufacturer_id = $request->input('description');
        // $product->manufacturer_id = 'NULL';

        $product->save();

        return redirect()->route('home');
    }

    public function view() {
        $products = Products::all();
        return view('home', ['products' => $products]);
    }
}
