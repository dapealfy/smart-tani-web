<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembibitan_id', 'jenis_hama', 'obat_hama', 'deskripsi'
    ];

    public function pembibitan()
    {
        return $this->belongsTo('App\Models\Pembibitan');
    }
}
