<x-app-layout title="Product">
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Semua Produk</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4 d-flex align-items-end my-auto">
        <div class="me-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" placeholder="Nyari apa?">
        </div>
        <div class="me-3">
            <label for="name" class="form-label">Produk</label>
            <select class="form-select" aria-label="Semua">
                <option selected>Semua</option>
                <option value="1">Pisang Sale</option>
                <option value="2">Kopi</option>
                <option value="3">Lainnya</option>
            </select>
        </div>
        <div class="me-3">
            <label for="name" class="form-label">Kategori</label>
            <select class="form-select" aria-label="Semua">
                <option selected>Semua</option>
                <option value="1">Pemasaran</option>
                <option value="2">Informasi</option>
            </select>
        </div>
        <button type="button" class="btn btn-primary search-button">Cari</button>
    </div>

    @empty(!$products)
        <div class="container mt-5">
            <h4>Tersedia {{ count($products) }} Produk</h4>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($products as $index => $product)
                    <div class="col-md-4 mt-2 mb-2">
                        <x-card img="{{ $product['url'] }}" place="{{ $product['alamat'] }}" name="{{ $product['nama'] }}"
                            price="{{ $product['harga'] }}" route="{{ route('product.show', $product) }}" />
                    </div>
                @endforeach
            @else
                <div class="container alert alert-info mt-5">Tidak ada data</div>
            @endempty
            {{-- <div class="col-md-4 mt-4">
                <x-card img="https://i.ibb.co/pRskbnp/anisa.jpg" place="Santong Barat" name="Anisa" price=10.000 />
            </div>
            <div class="col-md-4 mt-4">
                <x-card img="https://i.ibb.co/pRskbnp/anisa.jpg" place="Santong Barat" name="Anisa" price=10.000 />
            </div>
            <div class="col-md-4 mt-4">
                <x-card img="https://i.ibb.co/pRskbnp/anisa.jpg" place="Santong Barat" name="Anisa" price=10.000 />
            </div> --}}
            {{-- <div class="col-md-4">
                <x-card img="https://i.ibb.co/s6C4wR1/datu.jpg" place="Santong Asli" name="Datu Tambing" price=20.000 />
            </div>
            <div class="col-md-4">
                <x-card img="https://i.ibb.co/qWrthRC/nasel.jpg" place="Suka Damai" name="Nasel" price=10.000 />
            </div> --}}
        </div>
        {{-- <div class="row mt-4">
            <div class="col">
                <x-card img="https://i.ibb.co/pRskbnp/anisa.jpg" place="Santong Barat" name="Anisa" price=10.000 />
            </div>
            <div class="col">
                <x-card img="https://i.ibb.co/s6C4wR1/datu.jpg" place="Santong Asli" name="Datu Tambing" price=20.000 />
            </div>
            <div class="col">
                <x-card img="https://i.ibb.co/qWrthRC/nasel.jpg" place="Suka Damai" name="Nasel" price=10.000 />
            </div>
        </div> --}}
    </div>
</x-app-layout>
