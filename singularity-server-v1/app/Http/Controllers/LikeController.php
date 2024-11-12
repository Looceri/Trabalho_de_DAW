<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostReaction;

class LikeController extends Controller
{
    // Método para adicionar um "like"
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);

        // Verifica se o usuário já deu "like" nesse post
        $likeExists = PostReaction::where('user_id', $validatedData['user_id'])
            ->where('post_id', $validatedData['post_id'])
            ->where('reaction_type', 'like')
            ->exists();

        if ($likeExists) {
            return response()->json(['message' => 'Já existe um like para este post.'], 409);
        }

        // Cria um novo "like"
        PostReaction::create([
            'user_id' => $validatedData['user_id'],
            'post_id' => $validatedData['post_id'],
            'reaction_type' => 'like'
        ]);

        return response()->json(['message' => 'Like adicionado com sucesso.'], 201);
    }

    // Método para remover o "like"
    public function destroy(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);

        // Remove o "like" correspondente
        PostReaction::where('user_id', $validatedData['user_id'])
            ->where('post_id', $validatedData['post_id'])
            ->where('reaction_type', 'like')
            ->delete();

        return response()->json(['message' => 'Like removido com sucesso.'], 200);
    }

    // Método para listar os likes de um usuário
    public function index($userId)
    {
        // Retorna todos os likes do usuário específico
        $likes = PostReaction::where('user_id', $userId)
            ->where('reaction_type', 'like')
            ->get(['post_id']);

        return response()->json($likes, 200);
    }
}
