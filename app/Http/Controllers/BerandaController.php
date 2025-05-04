<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Galeri;

class BerandaController extends Controller
{
    public function index() {
        $layanans = Layanan::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(6)->get();
        return view('beranda', compact('layanans', 'galeris'));
    }
}