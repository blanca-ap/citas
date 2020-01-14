<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class EnfermedadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enfermedads')->insert([
            'nombre' => Str::random(10),
            'id' => '0',
            'id_especialidad'=>'0',



            /** Como se asignan valores a id y foreign keys?
             *  A qué columnas hay que propocionar seeds?
             * @todo
             */

        ]);
    }
}
