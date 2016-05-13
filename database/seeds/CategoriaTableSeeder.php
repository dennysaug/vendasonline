<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE categorias');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Categoria::create(['segmento_id' => 1, 'nome' => 'Memória']);
        Categoria::create(['segmento_id' => 1, 'nome' => 'Processador']);

        Categoria::create(['segmento_id' => 2, 'nome' => 'Console']);
        Categoria::create(['segmento_id' => 2, 'nome' => 'Acessório']);

        Categoria::create(['segmento_id' => 3, 'nome' => 'Smart TV']);
        Categoria::create(['segmento_id' => 3, 'nome' => 'Blue Ray']);
    }
}
