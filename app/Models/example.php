<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class example extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * Para crear mas interacciones con nuesta base de datos
     * Ejemplo un sistema de borrado
     */
}

