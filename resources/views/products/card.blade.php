



        <div class="card ">

            <div class="card-body">
                @if ($product->image)
                <div class="mb-3 row">
                    <label for="image" class="col-md-4 col-form-label text-md-end text-start"></label>
                    <div class="col-md-12">
                        <img src="{{ $product->imageUrl() }}  " alt="{{ $product->title }}" class="img-thumbnail">
                    </div>
                </div>
                @endif
                <h5 class="card-title">
                    <a href="{{  route('products.show', [ 'slug'=>$product->slug,'product'=>$product]) }}">{{
                        $product->title }}</a>
                </h5>
                <p class="card-text">{{ $product->surface }} m² - {{ $product->city }} {{ $product->postal_code }}</p>
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
                <div id='sold'>
                    {{-- todo : sold or not javascript --}}

                    <span style="color: {{ $product->sold ? 'red' : 'green' }}">
                        {{ $product->sold ? 'Vendu' : 'Disponible' }}
                    </span>

                </div>
                
            </div>

        </div>


