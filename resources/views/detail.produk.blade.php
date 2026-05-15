@extends('master')
@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-danger" style="font-family: 'Comic Sans MS', cursive;">My Favorite Barbie Movie</h1>
        <p class="lead text-secondary">Koleksi Pilihan terbaik untuk Tugas Misi 2 - {{ $nama }}</p>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
        <img src="https://pin.it/32YE5BEzS" class="card-img-top" alt="Charm School" style="height: 350px;" object-fit; cover;>
        <div class="card-body">
            <h5 class="card-title fw-bold text-danger">Princess Charm School</h5>
            <p class="card-text"><strong>Detail:</strong>Film ini bercerita tentang Blair Willows yang terpilih masuk sekolah putri.</p>
        </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="https://pin.it/2M36hfoaU" class="card-img-top" alt="A Pony Tale" style="height: 350px;" object-fit; cover;>
            <div class="card-body">
                <h5 class="card-title fw-bold text-danger">Barbie and Her Sisters in A Pony Tale</h5>
                <p card-text>Film ini bercerita tentang Barbie dan adik-adik perempuannya yang berlibur di Alpine Academy milik bibinya, Marlene.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="https://pin.it/2TisWQmUC" class="card-img-top" alt="Three Musketerrs" style="height: 350px;" object-fit; cover;>
            <div class="card-body">
                <h5 class="card-title fw-bold text-danger">Barbie and the Three Musketerrs</h5>
                <p card-text>Film ini bercerita tentang Corinne seorang gadis desa dari Gascony yang bermimpi menjadi seorang Musketerrs yaitu pasukan pengawal khusus kerajaan wanita pertama di Pranciss.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
    <a href="/" class="btn btn-danger btn-lg px-5 rounded-pill">Kembali ke Beranda</a>
    </div>

</div>
@endsection

