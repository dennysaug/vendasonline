<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->string('nome_produto');
            $table->float('valor');
            $table->tinyInteger('qtd');
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedido_produto', function(Blueprint $table){
            $table->dropForeign('pedido_id');
            $table->dropForeign('cliente_id');
            $table->dropForeign('produto_id');
        });
    }
}
