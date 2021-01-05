<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarpras extends Model
{
    use HasFactory;
    protected $table = "tb_sarpras";
    protected $fillable = ['nama','jumlah','baik','perawatan','image'];
}
