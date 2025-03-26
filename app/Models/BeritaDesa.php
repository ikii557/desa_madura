<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaDesa extends Model
{
    use HasFactory;

    protected $table = 'berita_desas';
    protected $fillable = ['admin_id', 'judul', 'isi_berita', 'gambar'];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
