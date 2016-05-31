<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE produtos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        factory(App\Produto::class, 50)->create();
    }
}
