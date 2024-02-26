@extends('layouts.app')



@section('content')



<div class="container mt-2">

    <h1>{{ $product->title }}</h1>
    <h2>{{ $product->rooms }} pièces - {{ $product->surface }} m² </h2>

    <div class="text-primary fw-bold" style="font-size: 4rem; ">
        {{ $product->formatted_price }}
    </div>

</div>

<hr>
<div class="container">
    {{-- <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>
@if (session('success'))
   @include('shared.flash')

@else
<form action="{{ route('property.contact',$product) }}" method="post" class="vstack gap-3">
    @csrf
    <div class="row">
        @include('shared.input', ['class'=>'col', 'name'=>'lastname', 'label'=>'Votre nom'])
        @include('shared.input', ['class'=>'col', 'name'=>'firstname', 'label'=>'Votre prénom'])
    </div>
    <div class="row">
        @include('shared.input', ['class'=>'col', 'name'=>'phone', 'label'=>'Votre téléphone'])
        @include('shared.input', ['type'=> 'email','class'=>'col', 'name'=>'email', 'label'=>'Votre email'])
    </div>
    @include('shared.input', ['type'=>'textarea','class'=>'col', 'name'=>'message', 'label'=>'Votre message'])
    <div>
        <button class="btn btn-primary">
            Nous contacter
        </button>
    </div>
</form>
@endif --}}
    </div>
    <div class="mt-4">
        <p>Description : {{ nl2br($product->description) }}</p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-stripe">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ $product->surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ $product->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ $product->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $product->floor ? : 'rez de chaussé'}}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>
                            {{ $product->address }} <br/></td>
                            <td>{{ $product->postal_code }} {{ $product->city }} </td>
                    </tr>

                </table>
            </div>
            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @foreach ($product->options as $option )
                    <li class="list-group-item">{{ $option->name }}</li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>


@endsection
