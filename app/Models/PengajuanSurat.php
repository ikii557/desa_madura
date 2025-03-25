<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_surats';
    protected $fillable = ['user_id', 'jenis_surat', 'dokumen_pendukung', 'status', 'alasan_penolakan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
