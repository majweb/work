<?php

namespace App\Jobs;

use App\Models\CvAudio;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MergeAudioChunksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $uploadId;
    protected $totalChunks;
    protected $projectId;
    protected $userId;
    protected $outputFormat; // 'mp3' lub 'flac'
    protected $cvAudioId;

    public function __construct(string $uploadId, int $totalChunks, int $projectId, int $userId, string $outputFormat = 'mp3', int $cvAudioId = null)
    {
        $this->uploadId = $uploadId;
        $this->totalChunks = $totalChunks;
        $this->projectId = $projectId;
        $this->userId = $userId;
        $this->outputFormat = $outputFormat;
        $this->cvAudioId = $cvAudioId;
    }

    public function handle()
    {
        $tempDir = "temp_uploads/{$this->uploadId}";
        $fileName = 'audio_' . Str::uuid() . '.' . $this->outputFormat;
        $finalDir = 'audios';
        $finalPath = "{$finalDir}/{$fileName}";
        $finalFullPath = Storage::disk('public')->path($finalPath);

        if (!Storage::disk('public')->exists($finalDir)) {
            Storage::disk('public')->makeDirectory($finalDir);
        }

        // Scalanie chunków
        $chunkFiles = collect(Storage::disk('local')->files($tempDir))
            ->filter(fn($p) => str_contains($p, 'chunk_'))
            ->sortBy(function ($p) {
                $base = basename($p);
                return (int) str_replace('chunk_', '', $base);
            })
            ->values();

        if ($chunkFiles->isEmpty()) {
            \Log::error('Brak chunków do scalenia (audio)', [
                'uploadId' => $this->uploadId,
                'tempDir' => $tempDir,
            ]);
            return;
        }

        $rawTempPath = Storage::disk('local')->path("{$tempDir}/raw_merged.wav");
        $out = fopen($rawTempPath, 'wb');
        if (!$out) {
            \Log::error('Nie można otworzyć pliku tymczasowego audio do zapisu', ['path' => $rawTempPath]);
            return;
        }

        foreach ($chunkFiles as $relativePath) {
            $chunkAbsPath = Storage::disk('local')->path($relativePath);
            $in = fopen($chunkAbsPath, 'rb');
            if ($in) {
                stream_copy_to_stream($in, $out);
                fclose($in);
            }
        }
        fclose($out);

        // KROK 2: Konwersja i naprawa przez FFmpeg
        // RecordRTC WAV (PCM) → MP3 320k
        $processedPath = Storage::disk('public')->path("processed_{$fileName}");

        // Uproszczona i bardziej stabilna komenda dla WAV
        if ($this->outputFormat === 'mp3') {
            $cmd = "ffmpeg -i " . escapeshellarg($rawTempPath) .
                " -c:a libmp3lame -b:a 320k -af 'loudnorm=I=-16:TP=-1.5:LRA=11' " .
                escapeshellarg($processedPath) . " -y 2>&1";
        } else {
            $cmd = "ffmpeg -i " . escapeshellarg($rawTempPath) .
                " -c:a flac -af 'loudnorm=I=-16:TP=-1.5:LRA=11' " .
                escapeshellarg($processedPath) . " -y 2>&1";
        }

        exec($cmd, $output, $returnVar);

        if ($returnVar !== 0) {
            \Log::error('FFMPEG error podczas scalania audio', [
                'output' => $output,
                'uploadId' => $this->uploadId,
                'cmd' => $cmd
            ]);
            return;
        }

        if (file_exists($processedPath)) {
            rename($processedPath, $finalFullPath);
        } else {
            \Log::error('Plik audio przetworzony nie istnieje mimo sukcesu FFmpeg', ['path' => $processedPath]);
            return;
        }

        if ($this->cvAudioId) {
            CvAudio::where('id', $this->cvAudioId)->update([
                'file_path' => $finalPath,
            ]);
        } else {
            CvAudio::create([
                'temp_session_id' => $this->uploadId,
                'project_id' => $this->projectId,
                'user_id' => $this->userId,
                'file_path' => $finalPath,
            ]);
        }

        Storage::disk('local')->deleteDirectory($tempDir);
    }
}
