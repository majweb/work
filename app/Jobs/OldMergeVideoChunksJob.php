<?php

namespace App\Jobs;

use App\Models\CvVideo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OldMergeVideoChunksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $uploadId;
    protected $totalChunks;
    protected $projectId;
    protected $userId;

    public function __construct(string $uploadId, int $totalChunks, int $projectId, int $userId)
    {
        $this->uploadId = $uploadId;
        $this->totalChunks = $totalChunks;
        $this->projectId = $projectId;
        $this->userId = $userId;
    }

    public function handle()
    {
        $tempDir = "temp_uploads/{$this->uploadId}";
        $fileName = 'video_' . Str::uuid() . '.mp4';
        $finalPath = "videos/{$fileName}";
        $finalDir = 'videos';
        $finalFullPath = Storage::disk('public')->path($finalPath);

        // Upewnij się, że folder 'videos' istnieje
        if (!Storage::disk('public')->exists($finalDir)) {
            Storage::disk('public')->makeDirectory($finalDir);
        }

        $out = fopen($finalFullPath, 'wb');
        if (!$out) {
            return;
        }

        for ($i = 0; $i < $this->totalChunks; $i++) {
            $chunkPath = Storage::disk('local')->path("{$tempDir}/chunk_{$i}");
            if (!file_exists($chunkPath)) {
                fclose($out);
                return;
            }

            $in = fopen($chunkPath, 'rb');
            stream_copy_to_stream($in, $out);
            fclose($in);
        }
        fclose($out);

        // Przetwarzanie ffmpeg - faststart
        $processedPath = Storage::disk('public')->path("processed_{$fileName}");
        $cmd = "ffmpeg -i " . escapeshellarg($finalFullPath) . " -movflags faststart -c:v copy -c:a aac -b:a 128k " . escapeshellarg($processedPath) . " -y 2>&1";
        exec($cmd, $output, $returnVar);

        if ($returnVar !== 0) {
            Log::error('FFMPEG error', $output);
            unlink($finalFullPath);
            return;
        }

        rename($processedPath, $finalFullPath);
        Cache::put('cv_session_'.$this->userId, $this->uploadId, 1800); // 1800 sekund = 30 minut

        try {
            CvVideo::create([
                'temp_session_id' => $this->uploadId,
                'project_id'      => $this->projectId,
                'user_id'         => $this->userId,
                'file_path'       => $finalPath,
            ]);
        } catch (\Exception $e) {
            Log::error('Nie udało się stworzyć CvVideo', [
                'error' => $e->getMessage(),
                'data'  => [
                    'uploadId' => $this->uploadId,
                    'projectId'=> $this->projectId,
                    'userId'   => $this->userId,
                    'filePath' => $finalPath
                ]
            ]);
        }

        Storage::disk('local')->deleteDirectory($tempDir);
    }
}
