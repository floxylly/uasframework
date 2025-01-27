<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara manual
    protected $table = 'hewan';

    protected $fillable = ['nama', 'jenis', 'deskripsi', 'foto'];

    // Relasi ke tabel adopsi
    public function adopsi()
    {
        return $this->hasMany(Adopsi::class);
    }
}