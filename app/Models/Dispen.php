<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispen extends Model
{
    use HasFactory;

    protected $table = "tb_dispen";
    protected $fillable = ['nama_siswa','tanggal','kelas','jurusan','jam1','jam2','keperluan'];
}
