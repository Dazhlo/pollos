<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public function pedidos()
    {
    return $this->hasMany(pedidos::class);
    
    
    }

}
