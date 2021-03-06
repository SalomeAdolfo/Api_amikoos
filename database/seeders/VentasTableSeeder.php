<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            [
                 'usuario_id' => 1
                ,'producto_id' => 1
                ,'fecha' => '03-04-2022'
                ,'monto' => 300
                ,'estado_pago' => 'Pagado'
            ]
        ]);
    }
}
