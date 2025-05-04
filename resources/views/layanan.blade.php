@extends('layouts.app')

@section('title', 'Layanan Desa')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Layanan Desa {{ config('app.name') }}</h1>
            
            <div class="row">
                @foreach($layanans as $layanan)
                <div class="col-md-6 mb-4">
                    <div class="card card-layanan h-100">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi {{ $layanan->icon }} fs-1 text-success me-3"></i>
                                </div>
                                <div>
                                    <h3>{{ $layanan->nama_layanan }}</h3>
                                    <p>{{ $layanan->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-5 bg-light p-5 rounded">
                <h2 class="text-center mb-4">Prosedur Pengajuan Layanan</h2>
                <ol>
                    <li>Datang ke Kantor Desa dengan membawa persyaratan</li>
                    <li>Isi formulir pengajuan</li>
                    <li>Serahkan kepada petugas</li>
                    <li>Tunggu proses verifikasi</li>
                    <li>Ambil hasil layanan sesuai jadwal yang ditentukan</li>
                </ol>
                <div class="text-center mt-4">
                    <a href="{{ route('kontak') }}" class="btn btn-success">Hubungi Kami untuk Info Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>
@endsection