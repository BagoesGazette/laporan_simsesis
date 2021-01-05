<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = "tb_tamu";
    protected $fillable = ['nama','alamat','telepon','instansi','keperluan','jenis_kelamin','bertemu','image'];
}
