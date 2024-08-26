<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "tbl_transaction";

    protected $primaryKey = "id_transaction";

    protected $fillable = [
        "id_user", "total", "status",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }
}
