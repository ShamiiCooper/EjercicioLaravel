<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facturas')->insert([
            'monto_total' => 1500,
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'cliente_id' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('facturas')->insert([
            'monto_total' => 1800,
            'fecha_emision' => Carbon::parse('2018-07-6'),
            'cliente_id' => 2,
            'created_at' => Carbon::now(),
        ]);
    }
}
