<?php

namespace App\Http\Controllers;

use App\Models\Halaman;

class HalamanController extends Controller
{
    public function profil()
    {
        $profil = Halaman::where('jenis', 'profil')->first();
        return view('profil', compact('profil'));
    }
}