<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = 'pedido_produto';
    protected $fillable = ['cliente_id', 'pedido_id', 'produto_id', 'nome_produto', 'valor', 'qtd'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
