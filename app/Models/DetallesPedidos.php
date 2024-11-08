<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesPedidos extends Model
{
//relacion de uno a muchos

public function pedidos()
{
return $this->hasMany(pedidos::class);


}
public function DetallesPedidos()
{
return $this->hasMany(DetallesPedidos::class);


}


}
