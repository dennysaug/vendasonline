<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('estado_id')->nullable();
            $table->tinyInteger('cidade_id')->nullable();;
            $table->string('nome', 100);
            $table->string('cpf', 20);
            $table->string('email')->unique();;
            $table->string('password')->nullable();;
            $table->text('endereco')->nullable();;
            $table->tinyInteger('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
