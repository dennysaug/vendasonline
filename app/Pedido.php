<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['status_id', 'cliente_id', 'frete_id', 'forma_pagamento_id', 'valor_frete', 'valor_total'];

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

    public function getFormaPagamentoIdAttribute($id)
    {
        switch($id) {
            case '1':
                $pagamento = 'À vista';
                break;
            case '2':
                $pagamento = "Boleto";
                break;
            case '3':
                $pagamento = 'Cartão de Cŕedito';
                break;
            default:
                $pagamento = 'Boleto Báncario';
                break;
        }

        return $pagamento;
    }

    public function scopeFiltro($query, $input)
    {
        if($input['id']) {
            $query->where('id', $input['id']);
        }

//        if($input['cliente']) {
//            $query->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')
//                  ->where('clientes.nome', 'like', "%{$input['cliente']}%")
//                  ->groupBy('pedidos.id');
//        }

        if($input['status_id']) {
            $query->where('status_id', $input['status_id']);
        }


        return $query;
    }





}
