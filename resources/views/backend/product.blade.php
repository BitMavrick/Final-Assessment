<x-backend.master>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <br>
        <a href="{{ route('product.create') }}"><button type="submit" class="btn btn-primary my-2">Create new
                Product</button></a>
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Product List</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">PK</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td> {{$product->category_name }} </td>
                    <td> {{$product->Brand_name }} </td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}"><button type="submit"
                                class="btn btn-primary my-2">Edit</button></a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger my-2">Delete</button>
                        </form>
                </tr>
                @endforeach

            </tbody>

    </main>


</x-backend.master>