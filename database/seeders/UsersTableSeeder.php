<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                 'name' => 'Brisa Ortiz'
                ,'codigopostal' => '50100'
                ,'direccion' => 'Miguel Hidalgo, sn, Lerma'
                ,'telefono' => '722343546'
                ,'nickname' => 'Brisa'
                , 'email' => 'brisa.ortiz@gmail.com'
                , 'password' => bcrypt('12345678')
            ]
        ]);
    }
}
