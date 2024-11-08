<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
   
    public function DetallesPedidos()
    {
  return $this->belongsTo(pedidos::class);

    }
    public function platillos()
    {
  return $this->belongsTo(platillos::class);

    }
    public function clientes()
{
    return $this->hasMany(clientes::class);
}
}
