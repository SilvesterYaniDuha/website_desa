<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Purbalingga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .navbar-brand img { height: 50px; }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/img/desa-bg.jpg');
            background-size: cover;
            padding: 100px 0;
            color: white;
        }
        .card-layanan { transition: transform 0.3s; }
        .card-layanan:hover { transform: translateY(-10px); }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/archive/a/af/20190331182022%21Lambang_Kabupaten_Purbalingga.png/120px-Lambang_Kabupaten_Purbalingga.png" alt="Logo Desa" style="height: 40px;">
    Desa Purbalingga
</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profil') ? 'active' : '' }}" href="{{ route('profil') }}">Profil Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Desa Purbalingga</h5>
                    <p>Website resmi pemerintahan Desa Purbalingga</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Kontak</h5>
                    <p><i class="bi bi-geo-alt"></i> Jl. Desa No. 123, Kecamatan, Kabupaten</p>
                    <p><i class="bi bi-telephone"></i> (021) 1234567</p>
                    <p><i class="bi bi-envelope"></i> info@desa{{ strtolower(config('app.name')) }}.id</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Berita Desa</a></li>
                        <li><a href="#" class="text-white">PPID Desa</a></li>
                        <li><a href="#" class="text-white">Dokumen Desa</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Desa {{ config('app.name') }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>