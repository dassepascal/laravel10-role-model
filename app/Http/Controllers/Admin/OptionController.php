<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\OptionFormRequest;

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
        return view('admin.options.index',[
            'options' => Option::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request): RedirectResponse
    {

        Option::create($request->validated());

        return redirect()->route('admin.options.index')
            ->with('success','Option created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option): View
    {
        return view('admin.options.show',compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option): View
    {
        return view('admin.options.edit',compact('option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option): RedirectResponse
    {
        $option->update($request->validated());

        return redirect()->route('admin.options.index')
            ->with('success','Option updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option): RedirectResponse
    {
        $option->delete();

        return redirect()->route('admin.options.index')
            ->with('success','Option deleted successfully');
    }

}
