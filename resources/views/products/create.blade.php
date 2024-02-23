@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
{{-- image --}}

                    <div class="mb-3 row">
                        <label for="title" class="col-md-4 col-form-label text-md-end text-start">Titre</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surface" class="col-md-4 col-form-label text-md-end text-start">Surface</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('surface') is-invalid @enderror" id="surface"
                                name="surface" value="{{ old('surface') }}">
                            @if ($errors->has('surface'))
                            <span class="text-danger">{{ $errors->first('surface') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rooms" class="col-md-4 col-form-label text-md-end text-start">rooms</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('rooms') is-invalid @enderror" id="rooms"
                                name="rooms" value="{{ old('rooms') }}">
                            @if ($errors->has('rooms'))
                            <span class="text-danger">{{ $errors->first('rooms') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bedrooms" class="col-md-4 col-form-label text-md-end text-start">bedrooms</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('bedrooms') is-invalid @enderror"
                                id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}">
                            @if ($errors->has('bedrooms'))
                            <span class="text-danger">{{ $errors->first('bedrooms') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="floor" class="col-md-4 col-form-label text-md-end text-start">floor</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('floor') is-invalid @enderror" id="floor"
                                name="floor" value="{{ old('floor') }}">
                            @if ($errors->has('floor'))
                            <span class="text-danger">{{ $errors->first('floor') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">price</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start">address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                name="address" value="{{ old('address') }}">
                            @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="city" class="col-md-4 col-form-label text-md-end text-start">city</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                name="city" value="{{ old('city') }}">
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
                                id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
                            @if ($errors->has('postal_code'))
                            <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row ">
                        <label class="form-checked-label col-md-4  text-md-end text-start" for="sold">Vendu</label>
                    <div class="form-check form-switch col-md-6">
                        <input type="hidden" name="sold" value="0" class="">
                        <input @checked (old('sold','value' ?? false) )
                            class="form-check-input @error('sold') is-invalid @enderror" role="switch" type="checkbox"
                            name="sold" id="sold" value="1" {{ 'sold' ? 'checked' : '' }}>

                    </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Product">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
