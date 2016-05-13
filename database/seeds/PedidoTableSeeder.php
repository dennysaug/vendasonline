<?php

use App\Pedido;
use App\PedidoProduto;
use App\Produto;
use Illuminate\Database\Seeder;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE pedidos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        factory(App\Pedido::class, 20)->create();

        $pedidos = Pedido::all();

        if(isset($pedidos)) {
            foreach ($pedidos as $pedido) {
                $produto = Produto::find(rand(1,20));
                PedidoProduto::create([
                    'pedido_id' => rand(1,20),
                    'produto_id' => $produto->id,
                    'nome_produto' => $produto->nome,
                    'valor' => $produto->valor,
                    'qtd' => rand(1,3)
                ]);

            }
        }

    }
}
