<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVendido extends Model
{
    use HasFactory;
    protected $table = "productos_vendidos";
    protected $fillable = ["id_venta", "descripcion", "codigo_barras", "precio", "cantidad"];
}
