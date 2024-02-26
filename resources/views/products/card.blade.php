<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="">{{ $product->title }}</a>
        </h5>
        <p class="card-text">{{  $product->surface }} m² - {{  $product->city }} {{ $product->postal_code }}</p>
        <div class="text-primary bold" style="font-size:1.4 rem">
        {{ $product->formatted_price }}
        </div>
        <div>
            <p class="card-list">
                @forelse ($product->options as $option )
                <span class="badge bg-primary">{{ $option->name }}</span>
                @empty
                <span class="badge bg-primary">Aucune option</span>
                @endforelse
            </p>
        </div>
        <div  id='sold'>
           {{-- todo : sold or not javascript --}}

            <span style="color: {{ $product->sold ? 'red' : 'green' }}">
                {{ $product->sold ? 'Vendu' : 'Disponible' }}
            </span>

        </div>
    </div>

</div>

