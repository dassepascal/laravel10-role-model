@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                {{-- image --}}
                @if ($product->image)
                <div class="mb-3 row">
                    <label for="image" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                    <div class="col-md-6">
                        <img src="{{ $product->imageUrl() }}  " alt="{{ $product->title }}" class="img-thumbnail">
                    </div>
                </div>
                @endif
                <div class="row ">
                    <label for="title"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Titre:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->title }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->description }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Surface:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->surface }} m²
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Pièces:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->rooms }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Chambres</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->bedrooms }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Etage:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->floor }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Prix:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->price }} €
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Adresse:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->address }}
                    </div>
                </div>
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Ville:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->city }}
                    </div>
                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Code
                            postal:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->postal_code }}
                    </div>
                </div>
                {{-- options --}}
                <div class="row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-end text-start"><strong>Options:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        @foreach ($product->options as $option)
                        <span class="badge bg-secondary">{{ $option->name }}</span>
                        @endforeach
                    </div>
                    {{-- sold --}}
                    <div class="row">
                        <label for="sold"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Vendu:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->sold ? 'Oui' : 'Non' }}
                        </div>
                        {{-- dpe --}}
                        <div class="row">
                            <label for="dpe"
                                class="col-md-4 col-form-label text-md-end text-start"><strong>DPE:</strong></label>
                            <div class="col-md-6 dpe" style="line-height: 35px;">
                                {{ $product->dpe }}
                            </div>
                            <label for="ges"
                                class="col-md-4 col-form-label text-md-end text-start"><strong>GES:</strong></label>
                            <div class="col-md-6 ges" style="line-height: 35px;">
                                {{ $product->ges }}
                            </div>
                        </div>
                    </div>




                </div>

            </div>
            <div class="d-flex justify-content-center">
                @include('shared.dpe')
            </div>
            @endsection
