<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Proveedores::create([
            'direccion' => 'Av Mitre 3241',
            'telefono' => 1138720720,
            'fecha_alta' => Carbon::parse('2018-07-6'),
        ]);

        App\Proveedores::create([
            'direccion' => 'Av Gaspar Campos 3408',
            'telefono' => 1165376085,
            'fecha_alta' => Carbon::parse('2018-07-6'),
        ]);
    }
}
