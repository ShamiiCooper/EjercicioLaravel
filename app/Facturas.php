<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $table = 'facturas';
    public $timestamps = false;
    protected $fillable = ['monto_total', 'fecha_alta', 'cliente_id'];
}
