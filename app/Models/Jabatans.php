<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatans extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jabatan',
    ];

    // protected $primaryKey = 'id';
//     protected $table = 'jabatans';
//     protected $primaryKey = 'idjabatans';

//     public $incrementing = true;
//     public $timestamps = true;
// 
}
