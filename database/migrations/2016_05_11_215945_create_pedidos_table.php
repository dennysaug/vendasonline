<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->tinyInteger('frete_id');
            $table->tinyInteger('forma_pagamento_id');
            $table->float('valor_frete')->nullable();
            $table->float('valor_total');
            $table->timestamps();

//            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos', function(Blueprint $table) {
            $table->dropColumn('cliente_id');
        });
    }
}
