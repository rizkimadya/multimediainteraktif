<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPustaka extends Model
{
    use HasFactory;

    protected $table = 'daftar_pustakas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'link_daftarpustaka'
    ];
}
