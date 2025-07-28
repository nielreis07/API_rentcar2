<?php

namespace App\Http\Controllers;

use App\Http\Services\ClienteService;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all(); // GET /clientes
    }

    public function criar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:clientes',
            'senha' => 'required|min:6',
            'telefone' => 'required|min:11',
            'cnh' => 'required|min:11',
        ]);

        $service = new ClienteService();
        $cliente = $service->criarCliente($request->all());
        return response()->json($cliente, 201);
    }

    public function exibir($id)
    {
      $service = new ClienteService();
      $cliente = $service->buscarCliente($id);
      return response()->json($cliente, 200);
    }

    public function atualizar(Request $request, $id)
    {
        $service = new ClienteService();
        $cliente = $service->atualizarCliente($request->all(), $id);
        return response()->json($cliente, 200);
    }

    public function deletar($id)
    {
        $service = new ClienteService();
        $cliente = $service->deletarCliente($id);
        return response()->json($cliente, 200);
    }
}