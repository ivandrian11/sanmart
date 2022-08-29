<div @class(['card shadow', $class ?? ''])>
    <img src={{ $img ?? '' }} class="card-img-top" alt="Gambar Produk" height="280px">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">{{ $name ?? '' }}</h5>
        <p class="card-text d-flex justify-content-center"><span class="price-card">Rp {{ $price ?? '' }}</span>
            &nbsp- {{ $place ?? '' }}
        </p>
        <a href="{{ $route ?? '' }}" class="btn btn-primary w-100">Selengkapnya</a>
    </div>
</div>
