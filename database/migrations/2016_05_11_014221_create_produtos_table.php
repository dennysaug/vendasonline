<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('nome');
            $table->string('codigo',50)->nullable();
            $table->string('texto')->nullable();
            $table->string('imagem')->nullable();
            $table->float('valor');
            $table->float('desconto')->nullable();
            $table->tinyInteger('ativo')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos', function(Blueprint $table){
            $table->dropColumn('categoria_id');
        });
    }
}
