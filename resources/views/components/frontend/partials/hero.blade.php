<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Welcome To the SHOP</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary my-2">Sign Out</button>
                </form>
                <a href="{{ route('admin') }}"><button type="submit" class="btn btn-primary my-2">Visit Admin
                        Panel</button></a>
                </p>
            </div>
        </div>
    </section>
</main>