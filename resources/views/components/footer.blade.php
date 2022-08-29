<!-- Remove the container if you want to extend the Footer to full width. -->
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #285e89">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">
                        SanMart
                    </h6>
                    <p>
                        Suatu sistem informasi yang digunakan untuk memasarkan dan memperkenalkan produk UMKM
                        yang ada di Desa Santong.
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">Layanan</h6>
                    <p>
                        <a class="text-white" href="{{ route('pages.profile') }}">Profil Desa</a>
                    </p>
                    <p>
                        <a class="text-white" href="{{ route('product.index') }}">Produk</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">
                        Lainnya
                    </h6>
                    <p>
                        <a class="text-white" href="{{ route('pages.about') }}">Tentang Kami</a>
                    </p>
                    <p>
                        <a class="text-white" href="{{ route('pages.faq') }}">FAQ</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">Ikuti Kami</h6>
                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                        href="https://web.facebook.com/groups/716469302985758" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    {{-- <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-twitter"></i></a> --}}

                    <!-- Google -->
                    {{-- <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-google"></i></a> --}}

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                        href="https://www.instagram.com/kkndesasantong/" target="_blank"><i
                            class="fab fa-instagram"></i></a>

                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <center>
                <div class="p-3">
                    © 2022 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">Santong Marketplace</a>
                </div>
            </center>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer>
<!-- Footer -->
