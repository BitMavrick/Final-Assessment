<x-frontend.master>
    <x-slot name="title">
        Details | SHOP
    </x-slot>

    <x-frontend.partials.navBar />

    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <h1>Product Specifications</h1>
                <hr class="border border-primary border-3 opacity-75">

                <div class="py-3">
                    <h3>Name : {{$product->name}}</h3>


                    <p>{{$product->description}}</p>
                    <h4>Price : {{$product->price}} BDT</h4>
                    <br>

                    <h3>Product Specifications</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic mollitia dolor enim quis minus illo
                        earum totam excepturi facere dignissimos perspiciatis, nihil voluptates, ratione eos rem
                        voluptate nesciunt id dolores voluptatem cupiditate aliquam porro expedita. Nam deleniti, fugit
                        provident exercitationem consequuntur eos, soluta aliquid vitae asperiores illum cupiditate! Ex
                        odio aperiam quibusdam, nobis rerum porro reprehenderit perferendis qui. Sit maiores eveniet
                        ullam itaque, sint iste tenetur necessitatibus sed vero quos!</p>
                    <br>
                    <h4>Brand : {{$product->Brand_name}} | Category: {{$product->category_name}}</h4>

                </div>
            </div>
        </div>

    </main>

    <x-frontend.partials.footer />


</x-frontend.master>