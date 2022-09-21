<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoControlado extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','slug','prescripto_para','componentes','cantidad','fecha_expiracion','precio_unidad'];
}
