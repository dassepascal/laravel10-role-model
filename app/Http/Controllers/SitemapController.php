<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): Response
    {

        $products = Product::latest()->get();
      
        return response()->view('sitemap', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }
}
