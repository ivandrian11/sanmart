<x-app-layout title="Home">

    <x-hero />

    <x-superior />

    <div class="container mt-5">
        <center>
            <h2>Produk UMKM</h2>
            <p class="lead">
                Produk yang dihasilkan oleh UMKM pada Desa Santong.
            </p>
        </center>

        <div class="row">
            @foreach ($products as $index => $product)
                <div class="col-md-4">
                    <x-card class="mb-3" width="80%" img="{{ $product['url'] }}" place="{{ $product['alamat'] }}"
                        name="{{ $product['nama'] }}" price="{{ $product['harga'] }}"
                        route="{{ route('product.show', $product) }}" />
                </div>
            @endforeach
        </div>

        <center>
            <a class="btn btn-outline-danger mt-4" href="{{ route('product.index') }}">Lihat Semua Produk</a>
        </center>
    </div>


    <x-flow />

    <div id="suggest">
        <x-suggest />
    </div>

</x-app-layout>
