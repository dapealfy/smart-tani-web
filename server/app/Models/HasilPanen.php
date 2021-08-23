<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPanen extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelompok_tani_id', 'jadwal_panen', 'jadwal_tanam', 'kebutuhan_bersih', 'hasil'
    ];

    public function kelompok_tani()
    {
        return $this->belongsTo('App\Models\KelompokTani');
    }
}
