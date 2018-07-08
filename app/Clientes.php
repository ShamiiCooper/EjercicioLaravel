<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;
    protected $fillable = ['nombre', 'direccion', 'fecha_alta'];
}
