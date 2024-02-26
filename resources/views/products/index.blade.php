@extends('layouts.app')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <form action="" method="get" class="container d-flex gap-2">


            <input type="number" placeholder="Budget max" class="form-control" name="price" value="{{ $input['price'] ?? '' }}">
            <input type="number" placeholder="Surface min" class="form-control" name="surface" value="{{ $input['surface'] ?? '' }}">
            <input type="number" placeholder="Pièces min" class="form-control" name="rooms" value="{{ $input['rooms'] ?? '' }}">
            <input  placeholder="Mot clef" class="form-control" name="title" value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn.sm flex-grow-0"> Rechercher</button>
      

    </form>
</div>
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
