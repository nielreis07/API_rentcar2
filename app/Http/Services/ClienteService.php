<?php

namespace App\Http\Services;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteService
{
    public function criarCliente($parametros)
    {
        $cliente = Cliente::create($parametros);
        return $cliente;
    }

    public function buscarCliente($id)
    {
      return Cliente::find($id);
    }

    public function atualizarCliente($parametros, $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $cliente->nome = $parametros['nome'];
            $cliente->email = $parametros['email'];
            $cliente->senha = $parametros['senha'];
            $cliente->telefone = $parametros['telefone'];
            $cliente->cnh = $parametros['cnh'];
            $cliente->save();
        }

        return $cliente;
    }
    
    public function deletarCliente($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return $cliente;
    }
}