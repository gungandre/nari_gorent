<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    protected $fillable = ['nama_unit', 'harga_hari', 'harga_minggu', 'harga_bulan', 'image'];
}
