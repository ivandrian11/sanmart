<x-app-layout title="About">

    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <img src="{{ asset('assets/kkn_santong_unram.JPG') }}" alt="KKN Desa Santong" class="img-fluid mt-2"
            style="border-radius: 32px">
        <center class="mt-2">
            <strong>
                <p>Foto Bersama di Batu Kolam</p>
            </strong>
        </center>
        <hr class="about-hr my-4" />
        <p class="lead">Santong Marketplace merupakan media pemasaran dan informasi mengenai UMKM dan
            produk-produk yang ada di
            Desa Santong. Santong Marketplace berisi banyak sekali produk UMKM & produk lainnya baik itu makanan,
            minuman, dan produk lainnya. <br><br>
            Santong Marketplace merupakan salah satu program kerja wajib yang kami miliki. Selain melakukan
            sosialisasi dan pembuatan NIB sebanyak 55 pelaku usaha, kami juga melakukan foto produk dan membuat
            website untuk melakukan pemasaran produk-produk UMKM & produk lainnya secara digital. Serta masih banyak
            lagi program tambahan lainnya guna meningkatkan hubungan dengan masyarakat.</p>
    </div>

</x-app-layout>
