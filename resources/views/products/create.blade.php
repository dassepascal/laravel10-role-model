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

                    <div class="mb-3 row">
                        <label for="title" class="col-md-4 col-form-label text-md-end text-start">Titre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="surface" class="col-md-4 col-form-label text-md-end text-start">Surface</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('surface') is-invalid @enderror" id="surface" name="surface" value="{{ old('surface') }}">
                            @if ($errors->has('surface'))
                                <span class="text-danger">{{ $errors->first('surface') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rooms" class="col-md-4 col-form-label text-md-end text-start">rooms</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('rooms') is-invalid @enderror" id="rooms" name="rooms" value="{{ old('rooms') }}">
                            @if ($errors->has('rooms'))
                                <span class="text-danger">{{ $errors->first('rooms') }}</span>
                            @endif
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
