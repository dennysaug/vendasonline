<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE usuarios');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Usuario::create([
            'grupo_id' => 5,
            'nome' => 'Atendente X',
            'email' => 'atendente@mail.com.br',
            'password' => bcrypt('0000')
        ]);
    }
}
