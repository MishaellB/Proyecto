<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table = 'detalle_factura';
    protected $fillable = ['id_fact', 'id_prod', 'cantidad', 'descripcion', 'precio_prod', 'descuento', 'neto', 'iva', 'total'];
}