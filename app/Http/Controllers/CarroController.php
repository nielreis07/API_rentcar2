<?php

namespace App\Http\Controllers;

use App\Http\Services\CarroService;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carroService = new CarroService();
        return response()->json($carroService->buscarTodos(), 200);
    }

    public function criar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required|unique:carros',
            'preco' => 'required|numeric',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $carroService = new CarroService();
        $carro = $carroService->criar($request->all());

        return response()->json($carro, 201);
    }

    public function exibir($id)
    {
        $carroService = new CarroService();
        $carro = $carroService->buscarCarro($id);

        return response()->json($carro, 200);
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required',
            'preco' => 'required|numeric',
            'cliente_id' => 'sometimes|exists:clientes,id',
        ]);

        $carroService = new CarroService();
        $carro = $carroService->atualizar($request->all(), $id);

        return response()->json($carro, 200);
    }

    public function deletar($id)
    {
        $carroService = new CarroService();
        $carro = $carroService->deletar($id);

        return response()->json($carro, 200);
    }
}
