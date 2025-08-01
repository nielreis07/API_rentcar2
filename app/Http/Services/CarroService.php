<?php

namespace App\Http\Services;

use App\Models\Carro;

class CarroService
{
    public function criar(array $dados)
    {
        $carro = Carro::create($dados);
        return $carro->load('cliente'); // retorna já com os dados do cliente
    }

    public function buscarTodos()
    {
        return Carro::with('cliente')->get(); // retorna todos os carros com cliente
    }

    public function buscarCarro($id)
    {
        return Carro::with('cliente')->findOrFail($id); // retorna um carro com cliente
    }

    public function atualizar(array $dados, $id)
    {
        $carro = Carro::findOrFail($id);

        $carro->update([
            'nome' => $dados['nome'],
            'marca' => $dados['marca'],
            'modelo' => $dados['modelo'],
            'placa' => $dados['placa'],
            'preco' => $dados['preco'],
            'cliente_id' => $dados['cliente_id'] ?? $carro->cliente_id,
        ]);

        return $carro->load('cliente');
    }

    public function deletar($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();

        return $carro;
    }
}
