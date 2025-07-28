<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'senha', 'telefone', 'cnh'];

    protected $hidden = ['senha'];
}
