<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionFormRequest;
use App\Models\Option;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class OptionController extends Controller
{
/**
 * Instantiate a new OptionController instance.
 */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-option|edit-option|delete-option', ['only' => ['index','show']]);
        $this->middleware('permission:create-option', ['only' => ['create','store']]);
        $this->middleware('permission:edit-option', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-option', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
 */

    public function index(): View
    {
        return view('options.index',[
            'options' => Option::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request): RedirectResponse
    {

        Option::create($request->validated());

        return redirect()->route('options.index')
            ->with('success','Option created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option): View
    {
        return view('options.show',compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option): View
    {
        return view('options.edit',compact('option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option): RedirectResponse
    {
        $option->update($request->validated());

        return redirect()->route('options.index')
            ->with('success','Option updated successfully');
    }
    
}
