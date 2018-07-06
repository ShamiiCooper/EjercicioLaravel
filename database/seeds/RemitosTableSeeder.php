<?php

use Illuminate\Database\Seeder;

class RemitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Remitos::create([
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'monto_total' => 7600,
            'proveedor_id' => 1,
        ]);

        App\Remitos::create([
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'monto_total' => 10600,
            'proveedor_id' => 2,
        ]);

    }
}
