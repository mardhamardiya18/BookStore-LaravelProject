<nav class="sb-topnav navbar navbar-expand navbar-light bg-transparent">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Book<span>Store</span></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-1 ms-4" id="sidebarToggle" href="#!">
        <i class='bx bx-menu bx-sm mt-2'></i>
    </button>

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-4">
        <li class="nav-item dropdown">

            @if (Auth::user()->avatar)
                <img src="{{ Auth::user()->avatar }}" class="img-fluid rounded-circle dropdown-toggle" width="50"
                    alt="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @elseif (Auth::user()->profile_pic)
                <img src="{{ Storage::url(Auth::user()->profile_pic) }}"
                    class="img-fluid rounded-circle dropdown-toggle" width="50" alt="" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
            @else
                <img src="{{ Auth::user()->gravatar() }}" class="img-fluid rounded-circle dropdown-toggle" alt=""
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @endif

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('homepage') }}">Back to store</a>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger ms-3 mt-3">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
