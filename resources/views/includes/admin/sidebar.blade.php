<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion text-bg-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon">
                        <i class='bx bxs-dashboard bx-sm'></i>
                    </div>
                    Dashboard
                </a>
                <a class="nav-link {{ request()->is('admin/transaction*') ? 'active' : '' }}" href="index.html">
                    <div class="sb-nav-link-icon">
                        <i class='bx bxs-cart-download bx-sm'></i>
                    </div>
                    Kelola Transaksi
                </a>
                <a class="nav-link {{ request()->is('admin/category*') ? 'active' : '' }}"
                    href="{{ route('category.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class='bx bx-list-plus bx-sm'></i>
                    </div>
                    Kelola Kategori
                </a>
                <a class="nav-link {{ request()->is('admin/book*') ? 'active' : '' }}"
                    href="{{ route('book.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class='bx bxs-book bx-sm'></i>
                    </div>
                    Kelola Buku
                </a>
                <a class="nav-link {{ request()->is('admin/banner*') ? 'active' : '' }}"
                    href="{{ route('banner.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class='bx bxs-notepad bx-sm'></i>
                    </div>
                    Kelola Banner
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
