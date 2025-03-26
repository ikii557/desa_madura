<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatForum extends Model
{
    use HasFactory;

    protected $table = 'chat_forums';

    protected $fillable = [
        'user_id',
        'isi_pesan',
    ];

    /**
     * Relasi ke tabel users (ChatForum dimiliki oleh User)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
