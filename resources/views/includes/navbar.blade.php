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

                @guest


                    <li class="nav-item me-lg-3 me-0 mt-4 mt-lg-0">
                        <a class="nav-link btn-second text-center" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item mt-3 mt-lg-0">
                        <a class="nav-link btn-first text-center" href="{{ route('register') }}">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item mt-3 mt-lg-0">
                        @php
                            $fullname = Auth::user()->name;
                        @endphp
                        <p class="nav-link mt-1">Hi, {{ strtok($fullname, ' ') }}</p>
                    </li>
                    <li class="nav-item">
                        @if (Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" class="img-fluid rounded-circle" width="50" alt=""
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        @elseif (Auth::user()->profile_pic)
                            <img src="{{ Storage::url(Auth::user()->profile_pic) }}" class="img-fluid rounded-circle"
                                width="50" alt="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        @else
                            <img src="{{ Auth::user()->gravatar() }}" class="img-fluid rounded-circle" alt=""
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        @endif

                        <div class="dropdown-center">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Go to dashboard</a></li>
                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn btn-danger ms-3 mt-3">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
