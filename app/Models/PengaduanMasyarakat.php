<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'pengaduan_masyarakats';
    protected $fillable = ['user_id', 'judul_pengaduan', 'isi_pengaduan', 'foto_bukti', 'status', 'tanggapan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
