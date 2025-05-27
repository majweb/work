<?php

namespace App\Jobs;

use App\Models\CvAudio; // zakładam model audio podobny do video
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MergeAudioChunksJob implements ShouldQueue
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
        $fileName = 'audio_' . Str::uuid() . '.wav';
        $finalDir = 'audios';
        $finalPath = "{$finalDir}/{$fileName}";
        $finalFullPath = Storage::disk('public')->path($finalPath);

        // Upewnij się, że folder 'audios' istnieje
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

        // Konwersja WebM do MP3 przez ffmpeg
        $mp3Path = Storage::disk('public')->path("converted_{$fileName}");
        $cmd = "ffmpeg -i " . escapeshellarg($finalFullPath)
            . " -af 'highpass=f=100, lowpass=f=3000, loudnorm'"
            . " -ar 44100 -ac 1 "
            . escapeshellarg($mp3Path) . " -y 2>&1";

        exec($cmd, $output, $returnVar);

        if ($returnVar !== 0) {
            return;
        }

        unlink($finalFullPath);
        rename($mp3Path, $finalFullPath);

        CvAudio::create([
            'project_id' => $this->projectId,
            'user_id' => $this->userId,
            'file_path' => $finalPath,
        ]);

        Storage::disk('local')->deleteDirectory($tempDir);
    }
}
