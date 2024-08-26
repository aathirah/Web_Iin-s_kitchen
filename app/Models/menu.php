<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    public $table = "tbl_menu";
    protected $primaryKey = "id_menu";

    protected $fillable = [
        'id_menu',
        'nama_menu',
        'harga',
        'stok',
        'ket',
        'gambar'
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class, "id_menu");
    }
}
