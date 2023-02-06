<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    use HasFactory;

    protected $table = 'evaluasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'keterangan',
        'nama_materi',
        'link_soal',
        'jumlah_soal',
    ];
}
