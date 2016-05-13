<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{


    public function segmento()
    {
        return $this->belongsTo(Segmento::class);
    }
}
