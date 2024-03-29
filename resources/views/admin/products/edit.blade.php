@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">

                </div>
                <div class="float-end">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="mb-3 row">
                        <label for="image" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="mb-3 row">
                            <label for="title" class="col-md-4 col-form-label text-md-end text-start">Titre</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ $product->title }}">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description"
                                class="col-md-4 col-form-label text-md-end text-start">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description">{{ $product->description }}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="surface" class="col-md-4 col-form-label text-md-end text-start">Surface</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('surface') is-invalid @enderror"
                                    id="surface" name="surface" value="{{ $product->surface }}">
                                @if ($errors->has('surface'))
                                <span class="text-danger">{{ $errors->first('surface') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="rooms" class="col-md-4 col-form-label text-md-end text-start">rooms</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('rooms') is-invalid @enderror" id="rooms"
                                    name="rooms" value="{{ $product->rooms }}">
                                @if ($errors->has('rooms'))
                                <span class="text-danger">{{ $errors->first('rooms') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bedrooms"
                                class="col-md-4 col-form-label text-md-end text-start">bedrooms</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('bedrooms') is-invalid @enderror"
                                    id="bedrooms" name="bedrooms" value="{{$product->bedrooms }}">
                                @if ($errors->has('bedrooms'))
                                <span class="text-danger">{{ $errors->first('bedrooms') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="floor" class="col-md-4 col-form-label text-md-end text-start">floor</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('floor') is-invalid @enderror" id="floor"
                                    name="floor" value="{{ $product->floor }}">
                                @if ($errors->has('floor'))
                                <span class="text-danger">{{ $errors->first('floor') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="price" class="col-md-4 col-form-label text-md-end text-start">price</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                    name="price" value="{{ $product->price }}">
                                @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-md-4 col-form-label text-md-end text-start">address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ $product->address }}">
                                @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="city" class="col-md-4 col-form-label text-md-end text-start">city</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                    name="city" value="{{ $product->city }}">
                                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="postal_code"
                                class="col-md-4 col-form-label text-md-end text-start">postal_code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                    id="postal_code" name="postal_code" value="{{ $product->postal_code }}">
                                @if ($errors->has('postal_code'))
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                                @endif
                            </div>
                        </div>
                        @include('shared.select', ['name' => 'options', 'label' => 'Options',
                        'value'=>$product->options->pluck('id'), 'options' => $options, 'multiple' => true])
                        @include('shared.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value' => $product->sold])
                        <div class="mb-3 row">
                            <label for="dpe" class="col-md-4 col-form-label text-md-end text-start">dpe</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('dpe') is-invalid @enderror" id="dpe"
                                    name="dpe" value="{{ $product->dpe }}">
                                @if ($errors->has('dpe'))
                                <span class="text-danger">{{ $errors->first('dpe') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ges" class="col-md-4 col-form-label text-md-end text-start">ges</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('ges') is-invalid @enderror" id="ges"
                                    name="ges" value="{{ $product->ges }}">
                                @if ($errors->has('ges'))
                                <span class="text-danger">{{ $errors->first('ges') }}</span>
                                @endif
                            </div>
                        </div>
                        @include('shared.dpe')
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
