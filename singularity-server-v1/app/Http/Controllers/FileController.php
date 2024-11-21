<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;



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
        try {
            // Validação da requisição
            $request->validate([
                'file' => 'required|file|max:10240',  // Max size of 10MB
                'vacancy_id' => 'nullable|exists:vacancies,id',  // Verifica se o ID da vaga existe
                'user_id' => 'required|exists:users,id',  // Verifica se o ID do usuário existe
            ]);

            $existingFile = false;

            if ($request->vacancy_id !== null) {
                // Verifica se o usuário já enviou um arquivo para essa vaga
                $existingFile = File::where('user_id', $request->user_id)
                    ->where('vacancy_id', $request->vacancy_id)
                    ->first();
            }

            // Se o arquivo ja existe, impede o upload
            if ($existingFile) {
                return response()->json([
                    'success' => false,
                    'message' => 'Você já enviou um CV para esta vaga.'
                ], 400);
            }

            // Se não houver um arquivo enviado, processa o novo arquivo
            $file = $request->file('file');
            if ($file) {
                $path = $file->store('uploads', 'public');  // Armazena o arquivo no diretório public/uploads
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Nenhum arquivo foi enviado',
                ], 400);
            }

            // Cria o registro do arquivo na tabela files com as informações adicionais
            $storedFile = File::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
                'extension' => $file->getClientOriginalExtension(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'user_id' => $request->user_id,  // Armazena o user_id
                'vacancy_id' => $request->vacancy_id,  // Armazena o vacancy_id
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Arquivo enviado com sucesso!',
                'file' => $storedFile,  // Retorna o arquivo enviado
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar o arquivo: ' . $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request)
    {
        // Valida os dados recebidos
        $request->validate([
            'id' => 'required|integer|exists:files,id',
            'file' => 'required|file|max:10240',  // Max size of 10MB
            'vacancy_id' => 'nullable|exists:vacancies,id',  // Verifica se o ID da vaga existe
            'user_id' => 'required|exists:users,id',  // Verifica se o ID do usuário existe
        ]);

        try {
            // Tenta encontrar o arquivo na tabela files
            $file = File::findOrFail($request->id);

            // Verifica e processa um novo arquivo, se estiver presente
            if ($request->hasFile('file')) {
                $newFile = $request->file('file');
                $newPath = $newFile->store('uploads', 'public');

                // Atualiza o registro do arquivo na tabela files
                $file->update([
                    'name' => $newFile->getClientOriginalName(),
                    'path' => $newPath,
                    'extension' => $newFile->getClientOriginalExtension(),
                    'size' => $newFile->getSize(),
                    'mime_type' => $newFile->getMimeType(),
                ]);

                // Retorna o arquivo atualizado
                return response()->json([
                    'success' => true,
                    'message' => 'Arquivo atualizado com sucesso',
                    'data' => $file,
                ], 200);
            }

            // Se não houver um novo arquivo, retorna um erro
            return response()->json([
                'success' => false,
                'message' => 'Nenhum arquivo foi enviado',
            ], 400);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar o arquivo',
                'error' => $e->getMessage(),
            ], 500);
        }
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

        $filePath = asset('/storage/' . $file->path);
        $file->path = $filePath;

        return response()->json([
            'success' => true,
            'file' => $file->path,
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

    public function apply(Request $request)
    {

        // Validação dos dados recebidos
        $validator = Validator::make($request->all(), [
            'file_id' => 'required|exists:files,id', // Valida que o file_id existe na tabela files
            'vacancy_id' => 'required|exists:vacancies,id',
            'user_id' => 'required|exists:users,id',
            'reason' => 'required|string|max:500',
            'application_date' => 'required|date_format:Y-m-d',
        ], [
            'file_id.required' => 'O campo file_id é obrigatório.',
            'file_id.exists' => 'O arquivo informado não existe.',
            'vacancy_id.required' => 'O campo vacancy_id é obrigatório.',
            'vacancy_id.exists' => 'A vaga informada não existe.',
            'user_id.required' => 'O campo user_id é obrigatório.',
            'user_id.exists' => 'O usuário informado não existe.',
            'reason.required' => 'O campo raz o é obrigatório.',
            'reason.max' => 'O campo raz o deve ter no máximo 500 caracteres.',
            'application_date.required' => 'O campo application_date é obrigatório.',
            'application_date.date_format' => 'O campo application_date deve estar no formato Y-m-d.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Verifica se o usuário já se candidatou à vaga
        $existingApplication = Application::where('user_id', $request->user_id)
            ->where('vacancy_id', $request->vacancy_id)
            ->first();

        if ($existingApplication) {
            return response()->json(['message' => 'Você já se candidatou para essa vaga.'], 400);
        }

        // Cria a candidatura na tabela applications com o file_id fornecido
        $application = Application::create([
            'user_id' => $request->user_id,
            'vacancy_id' => $request->vacancy_id,
            'file_id' => $request->file_id,
            'status' => 1,
            'reason' => $request->reason,
            'application_date' => $request->application_date,  // Define a data atual manualmente
        ]);


        return response()->json([
            'message' => 'Candidatura enviada com sucesso!',
            'application' => $application,
        ], 201);
    }


    public function getLastCv($user_id, $vacancy_id)
    {
        // Busca o último arquivo onde user_id e vacancy_id correspondem aos parâmetros
        $lastFile = File::where('user_id', $user_id)
            ->where('vacancy_id', $vacancy_id)
            ->latest() // Ordena do mais recente para o mais antigo
            ->first(); // Pega apenas o primeiro registro

        // Verifica se um arquivo foi encontrado
        if ($lastFile) {
            return response()->json([
                'success' => true,
                'file_id' => $lastFile->id,
                'message' => 'Último CV encontrado com sucesso!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum CV encontrado para esse usuário e vaga.'
            ], 404);
        }
    }

}
