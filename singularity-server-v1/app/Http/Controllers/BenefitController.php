<?php

namespace App\Http\Controllers;


use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Benefit;

class BenefitController extends Controller
{
    // Retorna todos os benefícios no banco de dados
    public function all()
    {
        $benefits = Benefit::all(); // Busca todos os benefícios
        return response()->json($benefits, Response::HTTP_OK); // Retorna os benefícios com status HTTP 200
    }

    // Método para listar benefícios de uma vaga específica
    public function findById($id)
    {
        // Buscar todos os benefícios associados à vaga específica com o id
        $benefits = Benefit::where('vacancy_id', $id)->get(); // Filtra os benefícios pela vaga com o id

        if ($benefits->isEmpty()) {
            return response()->json(['message' => 'Nenhum benefício encontrado para esta vaga.'], Response::HTTP_NOT_FOUND);
        }

        // Retorna os benefícios encontrados
        return response()->json($benefits, Response::HTTP_OK);
    }

    // Método para adicionar um novo benefício a uma vaga específica
    public function store(Request $request, $vacancy_id)
    {
        // Validar dados recebidos
        $request->validate([
            'benefit' => 'required|string|max:255',
        ]);

        // Verificar se a vaga existe
        $vacancy = Vacancy::find($vacancy_id);
        if (!$vacancy) {
            return response()->json(['message' => 'Vaga não encontrada.'], Response::HTTP_NOT_FOUND);
        }

        // Criar e salvar o novo benefício associado à vaga
        $benefit = new Benefit();
        $benefit->vacancy_id = $vacancy_id;
        $benefit->benefit = $request->benefit;
        $benefit->save();

        return response()->json($benefit, Response::HTTP_CREATED); // Retorna o benefício criado com status HTTP 201
    }
}
