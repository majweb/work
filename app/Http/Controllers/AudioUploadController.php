<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Jobs\MergeAudioChunksJob;

class AudioUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'chunk' => 'required|file',
            'upload_id' => 'required|string',
            'chunk_index' => 'required|integer|min:0',
            'total_chunks' => 'required|integer|min:1',
            'project_id' => 'required|integer|exists:projects,id',
        ]);

        $uploadId = $request->upload_id;
        $chunkIndex = $request->chunk_index;
        $totalChunks = $request->total_chunks;
        $projectId = $request->project_id;

        $tempDir = "temp_uploads/{$uploadId}";

        if (!Storage::disk('local')->exists($tempDir)) {
            Storage::disk('local')->makeDirectory($tempDir);
        }

        $chunkFileName = "chunk_{$chunkIndex}";

        Storage::disk('local')->putFileAs($tempDir, $request->file('chunk'), $chunkFileName);

        if (!Storage::disk('local')->exists("{$tempDir}/{$chunkFileName}")) {
            return response()->json(['success' => false, 'message' => 'Chunk not saved'], 500);
        }

        // Jeśli to ostatni chunk, dispatch job do scalania
        if ($chunkIndex == $totalChunks - 1) {
            MergeAudioChunksJob::dispatch($uploadId, $totalChunks, $projectId, auth()->id());
        }

        return response()->json([
            'success' => true,
            'message' => "Chunk {$chunkIndex} uploaded",
        ]);
    }
}
