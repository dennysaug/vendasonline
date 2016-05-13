<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = 'pedido_produto';

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
