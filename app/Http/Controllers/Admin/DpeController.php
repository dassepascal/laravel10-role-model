<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dpe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DpeController extends Controller
{

    
    public function index(): View
    {
        $dpes = Dpe::all();
        dd($dpes);
        return view('admin.dpes.index', [
            'dpes' => $dpes
        ]);
    }
}
