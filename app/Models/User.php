<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'kk',
        'email',
        'password',
        'role',
        'no_hp',
        'alamat',
        'foto',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi ke pengaduan masyarakat
    public function pengaduanMasyarakat()
    {
        return $this->hasMany(PengaduanMasyarakat::class, 'user_id');
    }

    // Relasi ke pengajuan surat
    public function pengajuanSurat()
    {
        return $this->hasMany(PengajuanSurat::class, 'user_id');
    }

    // Relasi ke chat forum
    public function chatForum()
    {
        return $this->hasMany(ChatForum::class, 'user_id');
    }

    // Relasi ke berita desa jika user sebagai admin
    public function beritaDesa()
    {
        return $this->hasMany(BeritaDesa::class, 'admin_id');
    }
}
