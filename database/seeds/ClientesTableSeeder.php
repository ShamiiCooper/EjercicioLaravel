<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Clientes::create(['nombre' => 'Miguel Rodriguez',
            'direccion' => 'Roque Saenz Peña 3987',
            'fecha_alta' => Carbon::parse('2018-07-6')
        ]);

        App\Clientes::create(['nombre' => 'José Perez',
            'direccion' => 'Marcos Sastre 2766',
            'fecha_alta' => Carbon::parse('2018-07-6')
        ]);
    }
}
