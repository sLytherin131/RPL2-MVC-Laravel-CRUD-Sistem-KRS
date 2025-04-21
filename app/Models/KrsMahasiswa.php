<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrsMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'krs_mahasiswa';

    protected $fillable = [
        'mahasiswa_id',
        'dosen_id',
        'mata_kuliah_id',
        'nama_mahasiswa',
        'npm',
        'jurusan',
        'nama_dosen',
        'nip',
        'bidang',
        'kode_mata_kuliah',
        'mata_kuliah',
        'sks',
    ];
}
