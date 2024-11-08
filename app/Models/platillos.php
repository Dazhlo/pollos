<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class platillos extends Model
{ //relacion  1 a muchos 
    
    public function pedidos()
{
return $this->hasMany(pedidos::class);

}
//relacion 1 a 1 
public function DetallesPedidos()
{
return $this->belongsTo(DetallesPedidos::class);


}
//uno a muchos
public function clientes()
{
    return $this->hasMany(clientes::class);
}

}
