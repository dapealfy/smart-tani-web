<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembibitan extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'jenis', 'lama_tanam', 'harga'
    ];
}
