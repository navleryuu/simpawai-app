<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pegawai',
        'jabatan_id',
        'divisi',
        'telepon',
        'alamat',
        'user_id'
    ];

    public function jabatan(): HasOne 
    {
        return $this->hasOne(Jabatans::class, 'id', 'jabatan_id');
    }

    public function user(): HasOne 
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
