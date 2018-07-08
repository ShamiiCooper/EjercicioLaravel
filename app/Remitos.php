<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remitos extends Model
{
    protected $table = 'remitos';
    public $timestamps = false;
    protected $fillable = ['monto_total', 'fecha_emision', 'proveedor_id'];
}
