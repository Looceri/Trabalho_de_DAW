<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Store a newly uploaded file in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validação da requisição
        $request->validate([
            'file' => 'required|file|max:10240',  // Max size of 10MB
            'vacancy_id' => 'required|exists:vacancies,id',  // Verifica se o ID da vaga existe
            'reason' => 'required|string|max:255',  // Valida o campo reason
            'user_id' => 'required|exists:users,id',  // Verifica se o ID do usuário existe
        ]);

        // Verifica se o usuário já enviou um arquivo para essa vaga
        $existingFile = File::where('user_id', $request->user_id)
            ->where('vacancy_id', $request->vacancy_id)
            ->first();

        if ($existingFile) {
            // Se já existe, impede o upload
            return response()->json([
                'success' => false,
                'message' => 'Você já enviou um CV para esta vaga.'
            ], 400);
        }

        // Se não houver um arquivo enviado, processa o novo arquivo
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');  // Armazena o arquivo no diretório public/uploads

        // Cria o registro do arquivo na tabela files com as informações adicionais
        $storedFile = File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'extension' => $file->getClientOriginalExtension(),
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'user_id' => $request->user_id,  // Armazena o user_id
            'vacancy_id' => $request->vacancy_id,  // Armazena o vacancy_id
            'reason' => $request->reason,  // Armazena o motivo
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Arquivo enviado com sucesso!',
            'file' => $storedFile,
        ], 201);
    }



    /**
     * Retrieve file details.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $file = File::findOrFail($id);

        return response()->json([
            'success' => true,
            'file' => $file,
            'url' => $file->url,  // Returns the full URL using the custom accessor
        ]);
    }

    /**
     * Delete a file from storage and remove it from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($file->path);

        // Delete the file record from the database
        $file->delete();

        return response()->json([
            'success' => true,
            'message' => 'File deleted successfully!',
        ]);
    }
}
