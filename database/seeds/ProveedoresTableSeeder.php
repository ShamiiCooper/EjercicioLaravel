<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prveedores')->insert([
            'direccion' => 'Av Mitre 3241',
            'telefono' => 1138720720,
            'fecha_alta' => Carbon::parse('2018-07-6'),
        ]);

        DB::table('proveedores')->insert([
            'direccion' => 'Av Gaspar Campos 3408',
            'telefono' => 1165376085,
            'fecha_alta' => Carbon::parse('2018-07-6'),
        ]);
    }
}
