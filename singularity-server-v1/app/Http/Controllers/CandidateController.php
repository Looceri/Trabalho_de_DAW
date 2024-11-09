<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Vacancy;
use App\Models\User;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function apply(Request $request)
    {
        // Validação dos dados recebidos
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf,doc,docx|max:10240', // Limite de 10MB
            'vacancy_id' => 'required|exists:vacancies,id',
            'user_id' => 'required|exists:users,id',
            'reason' => 'required|string|max:500',
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

        // Processa o arquivo enviado
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('public/cvs'); // Armazenando o arquivo em storage

            // Cria o registro de arquivo
            $fileModel = File::create([
                'path' => $filePath,
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getClientMimeType(),
            ]);
        }

        // Cria a candidatura
        $application = Application::create([
            'user_id' => $request->user_id,
            'vacancy_id' => $request->vacancy_id,
            'file_id' => $fileModel->id ?? null,
            'status' => true,
            'application_date' => now(),
        ]);

        return response()->json(['message' => 'Candidatura enviada com sucesso!', 'application' => $application], 201);
    }
}
