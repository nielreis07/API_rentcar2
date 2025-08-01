<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'senha', 'telefone', 'cnh'];

    protected $hidden = ['senha'];

    // Relacionamento: um cliente tem muitos carros
    public function carros()
    {
        return $this->hasMany(Carro::class, 'cliente_id');
    }
}
