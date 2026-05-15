@extends('master')
@section('konten_utama')
<div class="text-center" style="background-color: transparent !important; border: none;">
    <h5 class="fw-bold display-4" style="color: rgb(65, 9, 41);">Your Magical Portal to Barbie Movie Recommendations!</h5>
    <p class="lead" style="color: rgb(65, 9, 41);">Mahasiswi Teknik Informatika | {{ $nama }}</p>
</div>
<div class="mt-4">
    <a href="{{ url('/detail')}}" class="btn-shadow-sm" style="background-color: pink; color: white; border-radius: 50px; padding: 10px 30px; border: 2px solid #ffb6c1; font-weight: bold; text-decoration: none; transition: 0.3s;">
        Explore Details
    </a>
</div>
@endsection