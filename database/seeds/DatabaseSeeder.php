<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(GrupoUsuarioTableSeeder::class);
         $this->call(UsuarioTableSeeder::class);
         $this->call(SegmentoTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
         $this->call(ProdutoTableSeeder::class);
         $this->call(ClienteTableSeeder::class);
         $this->call(StatusTableSeeder::class);
         $this->call(PedidoTableSeeder::class);
    }
}
