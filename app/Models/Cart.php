<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "tbl_cart";

    protected $primaryKey = "id_cart";

    protected $fillable = [
        "id_user",
        "id_menu",
        "qty",
        "total"
    ];

    public function menu()
    {
        return $this->belongsTo(menu::class, "id_menu", "id_menu");
    }
}
