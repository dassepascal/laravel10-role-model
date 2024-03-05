<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate(4);
        return view('home',['products' => $products]);
    }


    public function sitemap()
    {
        return view('sitemap');
    }

    public function informations()
    {
        return view('informations');
    }

    public function politiques()
    {
        return view('politiques');
    }

    public function politiqueCookies(){
        return view('politiqueCookies');
    }
    public function gestionCookies(){
        return view('gestionCookies');
    }

    public function notreAgence(){
        return view('notreAgence');
    }

    public function quiSommesNous(){
        return view('quiSommesNous');
    }

    public function actualites(){
        return view('actualites');
    }

    public function conseils(){
        return view('conseils');
    }


}

