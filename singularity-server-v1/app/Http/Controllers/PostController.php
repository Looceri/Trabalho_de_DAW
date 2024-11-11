<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->where('status', true)->latest()->paginate(10);
        return view('pages.posts', compact('posts'));
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
    
        return redirect()->route('posts.index')->with('success', 'Post criado com sucesso');
    }

    // Show the form for editing a post
    public function edit(Post $post)
    {
        return view('pages.add-post', compact('post'));
    }

    // Update an existing post
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            return redirect()->route('posts.index')->with('error', 'Você não tem permissão para editar este post');
        }
    
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['title', 'description']);
    
        // Handle the image upload
        if ($request->hasFile('url_image')) {
            // Delete the old image if it exists
            if ($post->url_image && Storage::disk('public')->exists($post->url_image)) {
                Storage::disk('public')->delete($post->url_image);
            }
    
            // Save the new image
            $imagePath = $request->file('url_image')->store('post', 'public');
            $data['url_image'] = $imagePath;
        }
    
        $post->update($data);
    
        return redirect()->route('posts.index')->with('success', 'Post atualizado com sucesso');
    }
    

    // Deactivate a post
    public function deactivate($id)
    {
        // Encontrar o post pelo ID
        $post = Post::findOrFail($id);
    
        // Atualiza o status do post para falso (desativado)
        $post->update(['status' => false]);
    
        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->route('posts.index')->with('success', 'Post desativado com sucesso');
    }
    
}
