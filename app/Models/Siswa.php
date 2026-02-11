<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama','kelas','jurusan','alamat'];

}

// \App\Models\Siswa::create([
//     'nama' => 'Budi',
//     'kelas' => 'XI',
//     'jurusan' => 'Elektronika',
//     'alamat' => 'Jl. Merdeka No. 10',
// ]);


