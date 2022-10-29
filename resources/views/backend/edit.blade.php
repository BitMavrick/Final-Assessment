<x-backend.master>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <br>
        <a href="{{ route('product') }}"><button type="submit" class="btn btn-primary my-2">Products</button></a>
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create Product</h1>
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

        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Product Name" value="{{ $product->name }}">

            </div>

            <br>

            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input name="category_name" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Category Name"
                    value="{{ $product->category_name }}">

            </div>

            <br>

            <div class="form-group">
                <label for="exampleInputEmail1">Brand Name</label>
                <input name="Brand_name" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Brand Name" value="{{ $product->Brand_name }}">
            </div>

            <br>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input name="price" type="number" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter the price" value="{{ $product->price }}">

            </div>

            <br>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Description</label>
                <input name="description" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Description" value="{{ $product->description }}">

            </div>

            <br>

            <div class="form-check">
                <input name="status" type="checkbox" class="form-check-input" id="exampleCheck1" <?php
                                                                                                    if ($product->status == 1) {
                                                                                                        echo "checked";
                                                                                                    }
                                                                                                    ?>>
                <label class="form-check-label" for="exampleCheck1">Active?</label>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </main>


</x-backend.master>