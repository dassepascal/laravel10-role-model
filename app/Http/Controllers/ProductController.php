<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index',[
            'products' => Product::paginate(2)

        ]);
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('product.index');
    }
    public function show(string $slug, Product $product)
    {

        $product = Product::where('slug', $slug)->firstOrFail();
        //dd( $product, $slug);
        if($slug !== $product->slug) {
            return redirect()->route('products.show', ['slug' => $product->slug, 'product' => $product]);


        }
        return view('products.show', [
            'product' => $product

        ]);
    }

    public function edit($id)
    {
        return view('product.edit');
    }
    public function update(Request $request, $id)
    {
        return redirect()->route('product.index');
    }
    public function destroy($id)
    {
        return redirect()->route('product.index');
    }
}
