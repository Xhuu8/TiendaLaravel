<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function productos()
    {
        return $this->hasMany("App\ProductoVendido", "id_venta");
    }

    public function cliente()
    {
        return $this->belongsTo("App\Cliente", "id_cliente");
    }
}
