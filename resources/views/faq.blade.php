<x-app-layout title="FAQ">
    <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-3 mb-4">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apasih Santong Marketplace itu?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Santong Marketplace</strong> merupakan salah satu media promosi UMKM dan pelaku usaha di
                        Desa Santong guna untuk memasarkan produk - produk yang dimiliki agar terjangkau bagi pembeli di
                        luar Desa Santong.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apakah produk yang dihasilkan menggunakan hasil perkebunan Desa Santong?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Iya, produk yang dihasilkan menggunakan <strong>hasil perkebunan</strong> di Desa Santong.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Produk apa saja yang unggul di Desa Santong?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Produk UMKM yang unggul di Desa Santong adalah <strong>pisang sale</strong> dan
                        <strong>kopi</strong>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Apa batasan dari website yang dibangun ini?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Webiste Santong Marketplace sendiri hanya bertugas untuk sebagai <strong>media promosi dan
                            pemasaran dari UMKM dan usaha yang ada di Desa Santong</strong>, dimana pembeli dapat
                        melihat produk yang ada, kemudian jika ingin membeli akan dialihkan ke penjual, tidak sampai
                        melakukan pembayaran di website itu sendiri.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bagaimana alur pemesanan di Santong Marketplace?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Pilih produk yang ingin dibeli, kemudian tekan pesan produk melalui <strong>WhatsApp</strong>
                        ataupun media sosial lainnya, maka calon pembeli akan langsung diarahkan ke kontak penjual dari
                        produk yang ingin dibeli.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Jenis produk apa saja yang masuk ke dalam webiste Santong Marketplace?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Produk yang masuk ke dalam website Santong Marketplace bisa <strong>produk ataupun usaha apa
                            saja</strong>.
                        Selama produk ataupun usaha yang dihasilkan masih berada di Desa Santong, maka produk ataupun
                        usaha tersebut bisa masuk ke dalam website Santong Marketplace. Tetapi, yang membedakan
                        produk-produk di webiste Santong Marketplace adalah dari pembagian produk pemasaran dan
                        informasi.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Apa itu produk pemasaran dan informasi?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Produk pemasaran</strong> adalah produk produk dari UMKM ataupun pelaku usaha di Desa
                        Santong yang tetap
                        berproduksi, memiliki legalitas usaha, memiliki kontak ataupun informasi yang dapat dihubungi
                        untuk melakukan pembelian.
                        <br> <br>
                        Sedangkan <strong>produk informasi</strong> adalah produk ataupun usaha UMKM dan pelaku usaha di
                        Desa Santong yang produksinya tidak tetap, dan produk yanh dihasilkan hanya cukup untuk di
                        pasarkan di Desa Santong saja. Sehingga apabila pembeli ingin membeli produk ataupun usaha
                        tersebut, pembeli harus datang atau berkunjung langsung ke Desa Santong.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
