<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE clientes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        factory(App\Cliente::class, 30)->create();
    }
}
