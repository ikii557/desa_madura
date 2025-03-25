<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelayanan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pelayanans';
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai'];
}
