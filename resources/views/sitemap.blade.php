@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Plan du site</h1>
    <ul>
        {{-- todo route pour acueil --}}
        <li><a href="#">Accueil</a></li>
        <li><a href="{{ route('products.index') }}">Biens</a></li>
        {{-- <li><a href="{{ route('contact') }}">Contact</a></li> --}}

</div>
@endsection
