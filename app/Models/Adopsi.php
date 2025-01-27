<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopsi extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara manual
    protected $table = 'adopsi';

    protected $fillable = ['hewan_id', 'nama_pengadopsi', 'email', 'telepon', 'alamat'];

    // Relasi ke tabel hewan
    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }
}