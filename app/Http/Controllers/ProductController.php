<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::orderBy('id','DESC')->paginate(4)
        ]  );
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('product.index');
    }
    public function show($id)
    {
        return view('product.show');
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
