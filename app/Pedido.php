<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{


    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produtos()
    {
        return $this->hasMany(PedidoProduto::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');

    }

    public function getValorFreteAttribute($valor_frete)
    {
        return 'R$ ' . number_format($valor_frete, 2, ',', ' ');
    }

    public function getValorTotalAttribute($valor_total)
    {
        if($valor_total)
            return 'R$ ' . number_format($valor_total, 2, ',', ' ');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y H:i:s');
    }
}
