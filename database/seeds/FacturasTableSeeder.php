<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FacturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Facturas::create(['monto_total' => 1500,
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'cliente_id' => 1
        ]);

        App\Facturas::create(['monto_total' => 1800,
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'cliente_id' => 2
        ]);
    }
}
