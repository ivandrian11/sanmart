<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-3">Sampaikan Saran dan Masukan kepada Kami</h2>
            <form method='head' action="#">
                {{-- @csrf --}}
                <div class="mb-4">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea rows="5" name="message" id="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100" onclick="kirim()">Kirim</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-center mb-3">
            <img src={{ asset('assets/chat.svg') }} height="450px" alt="" />
        </div>
    </div>
</div>

<script>
    function kirim() {

        // var nama_kota = document.getElementById("form1").select1.value;
        var nama = document.getElementById("name").value;
        var pesan = document.getElementById("message").value;

        // alert("Nama: " + nama + "\nPesan: " + pesan);


        window.open(
            "https://api.whatsapp.com/send?phone=6281999313527&text=Halo,%20perkenalkan%20saya%20" + nama +
            "!%0A%0A" + pesan
        );
        // window.location.replace("http://www.w3schools.com");
    }
</script>
