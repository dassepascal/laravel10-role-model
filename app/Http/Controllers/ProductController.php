<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Mail\ProductContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ProductContactRequest;
use App\Http\Requests\SearchProductsRequest;

class ProductController extends Controller
{
    public function index(SearchProductsRequest $request)
    {

        $query = Product::query()->with('options');

        if($price = $request->validated('price')) {
           $query = $query->where('price', '<=', $price);
        }
        if($surface = $request->validated('surface')) {
            $query = $query->where('surface','<=',$surface);
        }
        if($rooms =  $request->validated('rooms')) {
            $query = $query->where('rooms','<=', $rooms);
        }
        if($title = $request->validated('title')) {
            $query = $query->where('title', 'like', "%{$title}%");
        }


        return view('products.index',[
            'products' => $query->paginate(3),
            'input'=> $request->validated()
        ]);
    }


    public function show(string $slug, Product $product)
    {

        $product = Product::where('slug', $slug)->firstOrFail();

        if($slug !== $product->slug) {
            return redirect()->route('products.show', ['slug' => $product->slug, 'product' => $product]);


        }
        return view('products.show', [
            'product' => $product

        ]);
    }

    public function contact(ProductContactRequest $request, Product $product)
    {
        Mail::send(new ProductContactMail($product, $request->validated()));
         return back()->with('success', 'Votre email a bien été envoyé');
    }



}
