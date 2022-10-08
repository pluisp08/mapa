<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

  

    public function grupos()
    {
        return $this->belongsTo(Grupo::class,'grupo_id');
    }

    public function impuestos()
    {
        return $this->belongsTo(Impuesto::class,'impuesto_id');
    }
}
