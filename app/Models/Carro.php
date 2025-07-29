<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'marca', 'modelo', 'placa', 'preco',];
}