@extends('layouts.app')

@section('title', 'Profil Desa')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="text-center mb-5">Profil Desa {{ config('app.name') }}</h1>
                    
                    <div class="mb-5">
                        <h2>Sejarah Desa</h2>
                        <p>Desa {{ config('app.name') }} berdiri sejak tahun 1920 dengan sejarah panjang sebagai desa pertanian yang subur. Awalnya hanya terdiri dari beberapa keluarga pendatang yang kemudian berkembang menjadi desa yang maju seperti sekarang.</p>
                    </div>
                    
                    <div class="mb-5">
                        <h2>Visi dan Misi</h2>
                        <h4>Visi:</h4>
                        <p>"Terwujudnya Desa {{ config('app.name') }} yang maju, mandiri, dan sejahtera berbasis masyarakat yang berakhlak mulia."</p>
                        
                        <h4 class="mt-4">Misi:</h4>
                        <ul>
                            <li>Meningkatkan kualitas sumber daya manusia</li>
                            <li>Mengembangkan potensi ekonomi desa</li>
                            <li>Membangun infrastruktur desa yang memadai</li>
                            <li>Meningkatkan pelayanan publik</li>
                        </ul>
                    </div>
                    
                    <div class="mb-5">
                        <h2>Struktur Pemerintahan</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th>Jabatan</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kepala Desa</td>
                                        <td>John Doe</td>
                                    </tr>
                                    <tr>
                                        <td>Sekretaris Desa</td>
                                        <td>Jane Smith</td>
                                    </tr>
                                    <tr>
                                        <td>Bendahara Desa</td>
                                        <td>Robert Johnson</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="mb-5">
                        <h2>Demografi</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Penduduk</h5>
                                        <p class="card-text display-6">2,543 Jiwa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Luas Wilayah</h5>
                                        <p class="card-text display-6">542 Ha</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection