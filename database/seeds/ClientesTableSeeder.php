<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Miguel Rodriguez',
            'direccion' => 'Roque Saenz Peña 3987',
            'fecha_alta' => Carbon::parse('2018-07-6'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('clientes')->insert(['nombre' => 'José Perez',
            'direccion' => 'Marcos Sastre 2766',
            'fecha_alta' => Carbon::parse('2018-07-6'),
            'created_at' => Carbon::now(),
        ]);
    }
}
