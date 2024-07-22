<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIM',
        'nama',
        'alamat',
        'jurusan',
        'umur'
    ];

    protected $primaryKey = 'NIM';
    public $incrementing = false;
    protected $keyType = 'string';
}
