<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistikDesa extends Model
{
    use HasFactory;

    protected $table = 'statistik_desas';
    protected $fillable = ['total_penduduk', 'total_kk', 'total_pengajuan', 'total_pengaduan'];
}
