<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokTani extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'nama', 'alamat', 'ketua', 'penyuluh', 'kecamatan', 'luas_tanah', 'anggota', 'unggulan', 'lat', 'lng'
    ];
}
