<x-app-layout title="Profile">
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil Desa</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-4">
        <center><img src="{{ asset('assets/struktur.png') }}" alt="KKN Desa Santong" class="img-fluid mt-2"></center>
        <center class="my-3">
            <strong>
                <p>Struktur Desa Santong 2022</p>
            </strong>
        </center>
        <hr class="about-hr my-4" />
        <center>
            <h4 class="mb-5">
                Rema Rapi Rapah<br>
                (Kebersamaan, Menata, Musyawarah)
            </h4>
        </center>

        <p class="lead">Desa Santong merupakan salah satu desa dari delapan (8) desa yang ada di wilayah Kecamatan
            Kayangan, Kabupaten Lombok Utara. Desa Santong mempunyai penduduk sebanyak 7133 yang tersebar dalam 14 dusun
            yang terdiri dari Dusun Santong Barat, Santong Timur, Santong Tengah, Santong Asli, Sukadamai, Mekar Sari,
            Mekar Jati, Mentari Timur, Sempakok, Waker, Gubuk Baru, Subak Sepuluh, Temposodo, dan Cempake.
            <br><br>
            Batas wilayah Desa Santong untuk sebelah Barat yaitu Desa Sambik Bangkol, sebelah Utara Desa Sesait, sebelah
            Selatan Taman Nasional Gunung Rinjani, dan sebelah TImur Desa Sesait.
            <br><br>
            Desa Santong memiliki banyak sekali sumber daya alam baik dalam bidang perkebunan, pertanian, peternakan,
            ataupun pariwisata. Pada bidang pertanian dan perkebunan Desa Santong sangat melimpah seperti cengkeh,
            pisang, kopi, jagung, dan yang lainnya. Pada bidang peternakan terdapat sapi dan ayam petelur. Pada bidang
            pariwisata terdapat beberapa air terjun seperti Tiu Teja, Tiu Bumbung, dan Tiu Sekeper.
        </p>

    </div>
</x-app-layout>
