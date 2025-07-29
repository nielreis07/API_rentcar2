<?php

namespace App\Http\Services;

use App\Models\Carro;

class CarroService
{
    public function criar(array $dados)
    {
        $carro = Carro::create($dados);
        return $carro;
    }

    public function buscarTodos()
    {
        return Carro::all();
    }

    public function buscarCarro($id)
    {
        return Carro::find($id);
    }

    public function atualizar(array $dados, $id)
    {
        $carro = Carro::find($id);
        if ($carro) {
            $carro->nome = $dados['nome'];
            $carro->marca = $dados['marca'];
            $carro->modelo = $dados['modelo'];
            $carro->placa = $dados['placa'];
            $carro->preco = $dados['preco'];
            $carro->save();
        }
        return $carro;
    }

    public function deletar($id)
    {
        $carro = Carro::find($id);
        $carro->delete();
        return $carro;
    }
}