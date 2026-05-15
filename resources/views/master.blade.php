<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PERTEMUAN 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    body{
        background: linear-gradient(to right, rgb(250, 200, 180), rgb(255, 161, 227) );
        min-height: 100vh;
        margin: 10;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="color: rgb(65, 9, 41);">The Pink Gallery</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Latihan1</a>
                <a class="nav-link" href="#">Latihan2</a>
                <a class="nav-link" href="#">Latihan3</a>
                <a class="nav-link" href="/detail">Latihan4</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('konten_utama')
    </div>
    @include('footer')
</body>
</html>