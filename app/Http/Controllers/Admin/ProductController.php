<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use App\Models\Product;
use Illuminate\View\View;
use GuzzleHttp\Psr7\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductFormRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-product|edit-product|delete-product', ['only' => ['index','show']]);
        $this->middleware('permission:create-product', ['only' => ['create','store']]);
        $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-product', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.products.index', [
            'products' => Product::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //dd(Option::pluck('name', 'id'));
        $product = new Product();
        return view('admin.products.create',[
            'product' => $product,
            'options' => Option::pluck('name', 'id')

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request): RedirectResponse
    {
       // dd($request->all());

       $product = Product::create($this->extracData(new Product(), $request));
        $product->options()->attach($request->validated('options'));
       //dd($product);
        //dd($request->validated());
        return redirect()->route('admin.products.index')
                ->withSuccess('New product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {

        return view('admin.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('admin.products.edit', [
            'product' => $product,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product): RedirectResponse
    {

        // $data = ($request->validated());
        // /** @var UploadedFile|null  $image */
        // $image = $request->validated('image');

        // if($image !== null && !$image->getError() && $image= $request->file('image')) {
        //     $imagePath =  $image->store('productImage', 'public');
        //     $data['image'] = $imagePath;
        // }

        //chemin de l'image

        $product->update($this->extracData($product, $request));
        $product->options()->sync($request->validated('options'));
        // dd($product->update($data));
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    private function extracData(Product $product, ProductFormRequest $request): array
    {
        $data = $request->validated();
        /** @var UploadedFile|null  $image */
        $image = $request->validated('image');
        if($image === null || $image->getError()) {

            return $data;
        }
        if($product->image) {
            Storage::disk('public')->delete($product->image);
            // Storage::disk('public')->path();
        }

        $data['image'] =  $image->store('productImage', 'public');


        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->image && Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect()->route('admin.products.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
