<?php

use App\Segmento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE segmentos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Segmento::create(['nome' => 'Informática']);
        Segmento::create(['nome' => 'Games']);
        Segmento::create(['nome' => 'Eletrônicos']);

    }
}
