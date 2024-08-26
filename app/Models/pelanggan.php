<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    public $table = "tbl_pelanggan";
    protected $primaryKey = "id_pelanggan";

    protected $fillable = [
        'id_pelanggan',
        'nm_pelanggan',
        'alamat',
        'no_hp',
        'gambar'
    ];
}
