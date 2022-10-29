<x-frontend.master>
    <x-slot name="title">
        Home | SHOP
    </x-slot>

    <x-frontend.partials.navBar />

    <x-frontend.partials.hero />

    <main>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($products as $product)
                    <div class="col">

                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <h3>{{$product->name}}</h3>
                                <p class="card-text">{{ $product->description}}</p>
                                <h6>Price: {{$product->price}} BDT</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('details', $product->id) }}"><button type="button"
                                                class="btn btn-sm btn-outline-secondary">View
                                                Info</button></a>

                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add To
                                            Cart</button>
                                    </div>
                                    <small class="text-muted">10 mins</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </main>

    <x-frontend.partials.footer />


</x-frontend.master>