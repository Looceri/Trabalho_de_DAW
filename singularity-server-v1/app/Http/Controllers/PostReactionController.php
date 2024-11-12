<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostReactionController extends Controller
{
    /**
     * Adiciona ou atualiza a reação de um usuário a um post.
     */
    public function reactToPost(Request $request, $postId)
    {
        $validated = $request->validate([
            'reaction_type' => 'required|in:like,love,wow,sad,angry',
        ]);

        $user = Auth::user(); // Usuário autenticado
        $post = Post::findOrFail($postId); // Verifica se o post existe

        // Verifica se o usuário já reagiu a esse post
        $existingReaction = PostReaction::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->first();

        if ($existingReaction) {
            // Se o usuário já reagiu, atualiza a reação
            $existingReaction->reaction_type = $validated['reaction_type'];
            $existingReaction->save();
        } else {
            // Caso contrário, cria uma nova reação
            PostReaction::create([
                'user_id' => $user->id,
                'post_id' => $post->id,
                'reaction_type' => $validated['reaction_type'],
            ]);
        }

        return response()->json(['message' => 'Reação registrada com sucesso!']);
    }

    /**
     * Remove a reação de um usuário a um post.
     */
    public function removeReaction($postId)
    {
        $user = Auth::user(); // Usuário autenticado
        $post = Post::findOrFail($postId); // Verifica se o post existe

        // Remove a reação se existir
        $reaction = PostReaction::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->first();

        if ($reaction) {
            $reaction->delete();
            return response()->json(['message' => 'Reação removida com sucesso!']);
        }

        return response()->json(['message' => 'Nenhuma reação encontrada para remover.'], 404);
    }

    /**
     * Obtém todas as reações de um post.
     */
    public function getReactions($postId)
    {
        $post = Post::findOrFail($postId); // Verifica se o post existe
        $reactions = $post->reactions; // Obtém todas as reações associadas ao post

        return response()->json($reactions);
    }

    public function checkLikedPosts($userId)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return response()->json(['message' => 'Usuário não autenticado'], 401);
        }

        // Obtém todos os likes do usuário
        $likes = PostReaction::where('user_id', $userId)
                             ->where('type', 'like')
                             ->get(['post_id']);

        return response()->json($likes, 200);
    }

}
