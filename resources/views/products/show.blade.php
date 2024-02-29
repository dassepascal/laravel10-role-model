@extends('layouts.app')



@section('content')



<div class="container mt-2  ">
    <div class=" row">

            @if ($product->image)
            <div class="col-md-6 mt-5 ">
                <label for="image" class="text-uppercase fw-bold"></label>

                    <img style="float: left; width: 500px; height: 300px; margin-right: 10px;"
                        src="{{ $product->imageUrl() }}  " alt="{{ $product->title }}" class="img-thumbnail">

            </div>
            @endif
            <div class=" col-md-6    ">
                <h2 class="text-uppercase mt-5 ">{{ $product->title }}</h2>
                <h2>{{ $product->rooms }} pièces </h2>
                <h2>{{ $product->surface }} m²</h2>
                <div class="text-primary fw-bold" style="font-size: 4rem; ">
                    {{ $product->formatted_price }}
                </div>
            </div>


    </div>
</div>

<hr>
<div class="container">
    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>
        @if (session('success'))
        @include('shared.flash')

        @else
        <form action="{{ route('product.contact',$product) }}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', ['class'=>'col', 'name'=>'lastname', 'label'=>'Votre nom','value'=>''])
                @include('shared.input', ['class'=>'col', 'name'=>'firstname', 'label'=>'Votre
                prénom','value'=>''])
            </div>
            <div class="row">
                @include('shared.input', ['class'=>'col', 'name'=>'phone', 'label'=>'Votre téléphone',
                'value'=>''])
                @include('shared.input', ['type'=> 'email','class'=>'col', 'name'=>'email', 'label'=>'Votre email',
                'value'=>''])
            </div>
            @include('shared.input', ['type'=>'textarea','class'=>'col', 'name'=>'message', 'label'=>'Votre
            message','value'=>'Bonjour, je suis intéressé par votre bien '])
            <div>
                <button class="btn btn-primary">
                    Nous contacter
                </button>
            </div>
        </form>
        @endif
    </div>
    <div class="mt-4">
        <p>Description : {!! nl2br($product->description) !!}</p>
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
                            {{ $product->address }} <br /></td>
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
