@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">

                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="title" class="col-md-4 col-form-label text-md-end text-start">Titre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $product->title }}">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bedrooms" class="col-md-4 col-form-label text-md-end text-start">bedrooms</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('bedrooms') is-invalid @enderror" id="bedrooms" name="bedrooms" value="{{ $product->bedrooms }} ">
                            @if ($errors->has('bedrooms'))
                                <span class="text-danger">{{ $errors->first('bedrooms') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surface" class="col-md-4 col-form-label text-md-end text-start">Pièces</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('rooms') is-invalid @enderror" id="rooms" name="rooms" value="{{ $product->rooms }} ">
                            @if ($errors->has('rooms'))
                                <span class="text-danger">{{ $errors->first('rooms') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bedrooms" class="col-md-4 col-form-label text-md-end text-start">Chambres</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('rooms') is-invalid @enderror" id="rooms" name="rooms" value="{{ $product->rooms }} ">
                            @if ($errors->has('rooms'))
                                <span class="text-danger">{{ $errors->first('rooms') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start">Adresse</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $product->address }} ">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="city" class="col-md-4 col-form-label text-md-end text-start">Ville</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ville') is-invalid @enderror" id="ville" name="ville" value="{{ $product->city }} ">
                            @if ($errors->has('ville'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="postal_code" class="col-md-4 col-form-label text-md-end text-start">Code postal</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" name="postal_code" value="{{ $product->postal_code }} ">
                            @if ($errors->has('postal_code'))
                                <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="mb-3 row">
                        <label for="sold" class="col-md-4 col-form-label text-md-end text-start">sold</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('sold') is-invalid @enderror" id="sold" name="sold" value="{{ $product->sold }} ">
                            @if ($errors->has('sold'))
                                <span class="text-danger">{{ $errors->first('sold') }}</span>
                            @endif
                    </div> --}}


                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
