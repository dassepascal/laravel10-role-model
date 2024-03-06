@extends('layouts.app')

@section('content')

<div class="bg-light p-5 text-center">
    <div class="container">

      <test></test>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ratione laboriosam quis esse beatae, ducimus voluptate rem voluptas facere voluptates autem libero praesentium molestias ullam possimus at? Quia, ipsa molestiae.</p>
    </div>
</div>
<div class="container">
    <h2>Nos derniers biens</h2>
     <div class="row">
        @foreach ($products as $product )
        <div class="col-md-3 mt-3">
            @include('products.card')
                    </div>
        @endforeach
    </div>
</div>
@endsection
