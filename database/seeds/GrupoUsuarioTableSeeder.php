<?php

use App\GrupoUsuario;
use Illuminate\Database\Seeder;

class GrupoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE grupo_usuarios');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        GrupoUsuario::create(['nome' => 'Adminstrador']);
        GrupoUsuario::create(['nome' => 'Gerente']);
        GrupoUsuario::create(['nome' => 'Supervisor']);
        GrupoUsuario::create(['nome' => 'Atendente']);
        GrupoUsuario::create(['nome' => 'Cliente']);

    }
}
