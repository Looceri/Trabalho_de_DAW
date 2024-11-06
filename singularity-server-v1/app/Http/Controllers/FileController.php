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
        $request->validate([
            'file' => 'required|file|max:10240',  // Max size of 10MB
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');  // Stores the file in storage/app/public/uploads

        // Create a record in the files table
        $storedFile = File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'extension' => $file->getClientOriginalExtension(),
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'user_id' => Auth::id(),  // Store the ID of the authenticated user
        ]);

        return response()->json([
            'success' => true,
            'message' => 'File uploaded successfully!',
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
