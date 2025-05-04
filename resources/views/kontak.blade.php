@extends('layouts.app')

@section('title', 'Kontak Desa')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="mb-4">Hubungi Kami</h1>
                    <p class="mb-5">Silakan hubungi kami melalui formulir di samping atau langsung datang ke kantor desa.</p>
                    
                    <div class="mb-4">
                        <h3><i class="bi bi-geo-alt text-success me-2"></i> Alamat Kantor Desa</h3>
                        <p>Jl. Desa No. 123, Kecamatan, Kabupaten, Provinsi</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3><i class="bi bi-telephone text-success me-2"></i> Telepon</h3>
                        <p>(021) 1234567</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3><i class="bi bi-envelope text-success me-2"></i> Email</h3>
                        <p>info@desa{{ strtolower(config('app.name')) }}.id</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3><i class="bi bi-clock text-success me-2"></i> Jam Buka</h3>
                        <p>Senin - Jumat: 08.00 - 16.00 WIB</p>
                        <p>Sabtu: 08.00 - 12.00 WIB</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Formulir Kontak</h2>
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            <form action="{{ route('kontak.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subjek" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subjek" name="subjek" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center mb-4">Peta Lokasi Kantor Desa</h2>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e839560a85ab!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1628580043825!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection