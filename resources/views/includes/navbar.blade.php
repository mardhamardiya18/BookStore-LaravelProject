<nav class="navbar navbar-expand-lg bg-light shadow-sm py-4 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Book<span>Store</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mx-auto mt-lg-0">
                <input type="text" class="form-control" placeholder="What book are you looking for?" />
                <button class="btn-search d-flex align-items-center justify-content-center" type="button"
                    id="button-addon2">
                    <i class="bx bx-search bx-sm"></i>
                </button>
            </div>
            <ul class="navbar-nav ms-auto mt-4 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bx bx-heart bx-tada-hover"></i></a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="#"><i class="bx bx-cart-alt bx-tada-hover"></i>
                        <span class="badge text-bg-warning rounded-circle position-absolute">2</span></a>
                </li>
                <li class="nav-item me-lg-3 me-0 mt-4 mt-lg-0">
                    <a class="nav-link btn-second text-center" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item mt-3 mt-lg-0">
                    <a class="nav-link btn-first text-center" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
