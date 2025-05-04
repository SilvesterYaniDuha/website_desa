<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    use HasFactory;

    // Tambahkan ini untuk menentukan nama tabel secara eksplisit
    protected $table = 'halamans';
    
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'jenis'
    ];
}