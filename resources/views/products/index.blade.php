@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="bg-light p-5 text-center">
                <div class="container">
                    <h1>Agence lorem ipsum</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ratione laboriosam quis esse
                        beatae, ducimus voluptate rem voluptas facere voluptates autem libero praesentium molestias
                        ullam
                        possimus at? Quia, ipsa molestiae.</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12 ">
            <form action="" method="get" class="container d-flex gap-2">
                <div class="row">
                    <div class="col-md-2  mt-2">
                        <input type="number" placeholder="Budget max" class="form-control" name="price"
                            value="{{ $input['price'] ?? '' }}">
                    </div>
                    <div class="col-md-2  mt-2">
                        <input type="number" placeholder="Surface min" class="form-control" name="surface"
                            value="{{ $input['surface'] ?? '' }}">
                    </div>
                    <div class="col-md-2  mt-2">
                        <input type="number" placeholder="Pièces min" class="form-control" name="rooms"
                            value="{{ $input['rooms'] ?? '' }}">
                    </div>
                    <div class="col-md-2  mt-2">
                        <input placeholder="Mot clef" class="form-control" name="title"
                            value="{{ $input['title'] ?? '' }}">
                    </div>
                    <div class="col-md-2  mt-2">
                        <button class="btn btn-primary btn.sm flex-grow-0"> Rechercher</button>

                    </div>

                </div>
        </div>
       
        <div class="col-md-12 mt-5 ">
            <div class="row">
                @forelse ($products as $product )
                <div class="col-md-4 mb-4">
                    @include('products.card')
                </div>
                @empty
                <div class=" col-12  bg-success text-center">
                    Aucun bien immobilier trouvé
                </div>
                @endforelse
            </div>
            <div class="my-4">
                {{ $products->links() }}
            </div>


        </div>
    </div>
</div>

{{-- <div class="row">

    <div class="col-12">
        <div class="bg-light p-5 text-center">
            <div class="container">
                <h1>Agence lorem ipsum</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ratione laboriosam quis esse
                    beatae, ducimus voluptate rem voluptas facere voluptates autem libero praesentium molestias ullam
                    possimus at? Quia, ipsa molestiae.</p>
            </div>
        </div>
    </div>

    <div class="bg-light p-5 mb-5 text-center ">
        <form action="" method="get" class="container d-flex gap-2">


            <input class="col-md-2" type="number" placeholder="Budget max" class="form-control" name="price"
                value="{{ $input['price'] ?? '' }}">
            <input class="col-md-2" type="number" placeholder="Surface min" class="form-control" name="surface"
                value="{{ $input['surface'] ?? '' }}">
            <input class="col-md-2" type="number" placeholder="Pièces min" class="form-control" name="rooms"
                value="{{ $input['rooms'] ?? '' }}">
            <input class="col-md-2" placeholder="Mot clef" class="form-control" name="title"
                value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn.sm flex-grow-0"> Rechercher</button>


        </form>
    </div>
</div>
<div class="container mt-2">
    <div class="row ">
        @forelse ($products as $product )
        <div class="col-6 mb-4">
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



</div> --}}
@endsection
