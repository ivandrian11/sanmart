<x-app-layout title="Detail">
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Semua Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product['nama'] }}</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <div class="d-none d-md-block">
            <div class="row">
                <div class="col">
                    <img src="{{ $product['url'] }}" alt="{{ $product['nama'] }}" class="img-detail" width="100%"
                        height="480px" />
                </div>
                <div class="col align-self-center">
                    <h3 class="product-name"><strong>{{ $product['nama'] }}</strong></h3>
                    <p class="lead">Oleh {{ $product['pemilik'] }}</p>
                    <p class="lead"><span class="price-card">Rp {{ $product['harga'] }}</span>
                        @if ($product['ukuran'] !== '-')
                            &nbsp (Ukuran: {{ $product['ukuran'] }})
                        @endif
                    </p>
                    <p class="lead">
                        {{ $product['nama'] }} merupakan produk dari Desa Santong yang bertempat di dusun
                        {{ $product['alamat'] }}. Produk ini dikelola oleh {{ $product['pemilik'] }}.
                        @if ($product['legalitas'] !== '-')
                            Produk ini telah memiliki legalitas usaha seperti {{ $product['legalitas'] }}.
                        @endif
                        <br> <br>
                        Komposisi: {{ $product['komposisi'] }}.
                    </p>
                </div>
            </div>
        </div>

        <div class="d-sm-block d-md-none">
            <div class="row">
                <div class="col-md mb-3">
                    <center>
                        <img src="{{ $product['url'] }}" alt="{{ $product['nama'] }}" class="img-detail"
                            width="100%" height="380px" />
                    </center>
                </div>
                <div class="col-md justify-content-center">
                    <h3 class="product-name"><strong>{{ $product['nama'] }}</strong></h3>
                    <p class="lead">Oleh {{ $product['pemilik'] }}</p>
                    <p class="lead"><span class="price-card">Rp {{ $product['harga'] }}</span>
                        @if ($product['ukuran'] !== '-')
                            &nbsp (Ukuran: {{ $product['ukuran'] }})
                        @endif
                    </p>
                    <p class="lead">
                        {{ $product['nama'] }} merupakan produk dari Desa Santong yang bertempat di dusun
                        {{ $product['alamat'] }}. Produk ini dikelola oleh {{ $product['pemilik'] }}.
                        @if ($product['legalitas'] !== '-')
                            Produk ini telah memiliki legalitas usaha seperti {{ $product['legalitas'] }}.
                        @endif
                        <br> <br>
                        Komposisi: {{ $product['komposisi'] }}.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if ($product['wa'] !== '-')
        <div class="container mt-5">
            <div class="d-flex align-items-center">
                <h4>Pemesanan melalui: </h4>
                <a href="https://api.whatsapp.com/send?phone=6281999313527&text=Halo%20!%20Saya%20ingin%20memesan%20{{ $product['nama'] }}%20buatan%20{{ $product['pemilik'] }}%20yang%20ukuran%20{{ $product['ukuran'] }}%20seharga%20Rp%20{{ $product['harga'] }}.%20%0AApakah%20bisa%20segera%20diproses?%20"
                    target="_blank"><img src="{{ asset('assets/wa.svg') }}" height="56px" alt=""
                        class="ms-3"></a>
                @if ($product['fb'] !== '-')
                    <a href=""><img src="{{ asset('assets/fb.svg') }}" height="56px" alt=""
                            class="ms-3"></a>
                @endif
            </div>
        </div>
    @endif

    <hr class="hr-full my-5">

    <div class="container mt-5">
        <h3>Produk Lainnya</h3>
    </div>

    <div class="container">
        <div class="row mt-3">
            @foreach ($relatedProducts as $index => $product)
                <div class="col-md-4 mt-2">
                    <x-card class="mb-4" img="{{ $product['url'] }}" place="{{ $product['alamat'] }}"
                        name="{{ $product['nama'] }}" price="{{ $product['harga'] }}"
                        route="{{ route('product.show', $product) }}" />
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
