<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostReaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function post_list()
    {
        return view('pages.posts');
    }

    public function index(Request $request, $companyId)
    {
        // Recupera o ID do usuário do parâmetro na requisição
        $userId = $request->input('user_id');  // O ID do usuário vem como parâmetro na requisição

        // Busca todos os posts da empresa específica
        $posts = Post::where('user_id', $companyId)->get(); // Altere de 'user_id' para o ID da empresa

        // Adiciona a informação de "liked" para cada post
        $postsWithLikes = $posts->map(function ($post) use ($userId) {
            // Verifica se o usuário deu "like" nesse post
            $post->liked = PostReaction::where('user_id', $userId)
                ->where('post_id', $post->id)
                ->where('reaction_type', 'like')
                ->exists(); // Verifica se o usuário deu "like"
            return $post;
        });

        // Retorna os posts com a informação do "like"
        return response()->json($postsWithLikes, 200);
    }
    public function all()
    {
        // Carregar todos os posts com o relacionamento 'user' (associando o post ao usuário que o criou)
        $posts = Post::with('user')->get();

        // Adiciona a informação da URL da imagem para cada post
        $postsWithImageUrls = $posts->map(function ($post) {
            // Tratamento da URL da imagem para que seja uma URL real
            $filePath = asset('/storage/' . $post->url_image);
            $post->url_image = $filePath;
            return $post;
        });

        // Retornar os posts com os dados do usuário associado
        return response()->json($postsWithImageUrls, 200);
    }

    public function getAllReactions(Request $request, $companyId)
    {
        // Busca todos os posts da empresa específica
        $posts = Post::where('user_id', $companyId)->get();

        // Adiciona a informação de todas as reações para cada post
        $postsWithReactions = $posts->map(function ($post) {
            // Recupera todas as reações desse post, agrupadas por tipo
            $reactions = PostReaction::where('post_id', $post->id)
                ->get()
                ->groupBy('reaction_type'); // Agrupa por tipo de reação

            // Adiciona as reações ao post
            $post->reactions = $reactions;

            return $post;
        });

        // Retorna os posts com a informação de todas as reações
        return response()->json($postsWithReactions, 200);
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('pages.add-post');
    }

    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        $data = $request->only(['title', 'description', 'status']);
        $data['user_id'] = Auth::id(); // Set user_id to the authenticated user

        // Handle the image upload
        if ($request->hasFile('url_image')) {
            $imagePath = $request->file('url_image')->store('post', 'public'); // Save in "storage/app/public/post"
            $data['url_image'] = $imagePath; // Save the path in the database
        }

        Post::create($data);

        return redirect()->route('post_list')->with('success', 'Post criado com sucesso');
    }

    // Show the form for editing a post
    public function edit(Post $post)
    {
        return view('pages.add-post', compact('post'));
    }

    // Update an existing post
    public function update(Request $request, Post $post)
    {



        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('url_image')) {
            // Save the new image if uploaded
            $imagePath = $request->file('url_image')->store('post', 'public');
            $data['url_image'] = $imagePath;
        } else {
            // If no new image is uploaded, keep the existing image path
            $data['url_image'] = $post->url_image;
        }


        $post->update($data);

        return redirect()->route('post_list')->with('success', 'Post atualizado com sucesso');
    }


    // Deactivate a post
    public function deactivate($id)
    {
        // Encontrar o post pelo ID
        $post = Post::findOrFail($id);

        // Atualiza o status do post para falso (desativado)
        $post->update(['status' => false]);

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->route('post_list')->with('success', 'Post Apagado com sucesso');
    }


    public function getPostsByCompany($companyId)
    {
        // Busca todos os posts da empresa com o user_id igual ao companyId
        $posts = Post::where('user_id', $companyId)->get();

        return response()->json($posts);
    }
}
