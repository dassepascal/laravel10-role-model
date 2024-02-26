@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row ">
        @forelse ($products as $product )
        <div class="col-3 mb-4">
            @include('products.card')
        </div>
        @empty
        <div class=" col-12  bg-success text-center
        ">
          Aucun bien immobilier trouvé
        </div>

        @endforelse
    </div>



    <div class="my-4">
        {{ $products->links() }}
    </div>



</div>
@endsection
