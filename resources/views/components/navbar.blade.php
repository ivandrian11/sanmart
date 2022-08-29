<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav align-items-center navbar-nav">
            {{-- <li class="nav-item">
                <img src="/assets/market-icon.svg" alt="" width="48" height="48"
                    class="d-inline-block align-text-top">
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <h5 class="sanmart-logo">SanMart</h5>
                </a>

            </li>
        </ul>

        <ul class="nav justify-content-end navbar-nav collapse navbar-collapse my-2" id="navbarTogglerDemo03">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                    href="{{ route('pages.profile') }}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('products') ? 'active' : '' }}"
                    href="{{ route('product.index') }}">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                    href="{{ route('pages.about') }}">Tentang</a>
            </li>
            {{-- <li class="nav-item">
                <a class="btn btn-outline-danger" hrefs="#">Hubungi Kami</a>
            </li> --}}
        </ul>
    </div>
</nav>
