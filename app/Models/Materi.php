<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_materi',
        'isi_materi',
        'gambar',
    ];
}
