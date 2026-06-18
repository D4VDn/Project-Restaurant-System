<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = [
        'nome',
        'tipo_culinaria',
        'telefone',
        'foto',
    ];
}