@extends('layouts.app')

@section('title', 'Galeri Desa')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Galeri Kegiatan Desa {{ config('app.name') }}</h1>
            
            <div class="row">
                @foreach($galeris as $galeri)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $galeri->gambar) }}" class="card-img-top" alt="{{ $galeri->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $galeri->judul }}</h5>
                            <p class="card-text">{{ Str::limit($galeri->deskripsi, 100) }}</p>
                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#gambarModal{{ $galeri->id }}">Lihat</button>
                        </div>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="gambarModal{{ $galeri->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $galeri->judul }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('storage/' . $galeri->gambar) }}" class="img-fluid" alt="{{ $galeri->judul }}">
                                <p class="mt-3">{{ $galeri->deskripsi }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            
        </div>
    </section>
@endsection