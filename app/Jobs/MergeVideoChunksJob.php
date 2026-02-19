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

class MergeVideoChunksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $uploadId;
    protected $totalChunks;
    protected $projectId;
    protected $userId;
    protected $cvVideoId;

    public function __construct(string $uploadId, int $totalChunks, int $projectId, int $userId, int $cvVideoId = null)
    {
        $this->uploadId = $uploadId;
        $this->totalChunks = $totalChunks;
        $this->projectId = $projectId;
        $this->userId = $userId;
        $this->cvVideoId = $cvVideoId;
    }

    public function handle()
    {
        $tempDir = "temp_uploads/{$this->uploadId}";
        $fileName = 'video_' . Str::uuid() . '.mp4';
        $finalDir = 'videos';
        $finalPath = $finalDir . '/' . $fileName;
        $finalFullPath = Storage::disk('public')->path($finalPath);

        // Tworzenie folderu, jeśli nie istnieje
        if (!Storage::disk('public')->exists($finalDir)) {
            Storage::disk('public')->makeDirectory($finalDir);
        }

        // Zbierz wszystkie pliki chunk_* i posortuj po indeksie numerycznym
        $chunkFiles = collect(Storage::disk('local')->files($tempDir))
            ->filter(fn($p) => str_contains($p, 'chunk_'))
            ->sortBy(function ($p) {
                $base = basename($p);
                return (int) str_replace('chunk_', '', $base);
            })
            ->values();

        if ($chunkFiles->isEmpty()) {
            Log::error('Brak chunków do scalenia', [
                'uploadId' => $this->uploadId,
                'tempDir' => $tempDir,
            ]);
            return;
        }

        // Pobierz oczekiwaną liczbę chunków z cache
        $expectedChunks = (int) Cache::get("video_upload:{$this->uploadId}:total_chunks", 0);
        if ($expectedChunks > 0 && $chunkFiles->count() < $expectedChunks) {
            Log::warning('MergeVideoChunksJob: Niekompletna liczba chunków przed scalaniem', [
                'uploadId' => $this->uploadId,
                'expected' => $expectedChunks,
                'actual' => $chunkFiles->count(),
            ]);
        }

        // KROK 1: Scalanie binarne (byte-level concatenation)
        // Ponieważ chunky są wynikiem blob.slice() na frontendzie, nie są kompletnymi kontenerami wideo.
        // Scalamy je w jeden surowy plik przed uruchomieniem FFmpeg.
        $rawTempPath = Storage::disk('local')->path("{$tempDir}/raw_merged.webm");
        $out = fopen($rawTempPath, 'wb');
        if (!$out) {
            Log::error('Nie można otworzyć pliku tymczasowego do zapisu', ['path' => $rawTempPath]);
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

        // KROK 2: Konwersja i naprawa kontenera przez FFmpeg
        // VP8/Opus (z MediaRecorder) → H.264/AAC MP4
        $processedPath = Storage::disk('public')->path("processed_{$fileName}");
        $cmd = "ffmpeg -fflags +genpts -i " . escapeshellarg($rawTempPath) . " " .
            "-vf \"scale='if(gt(iw,1280),1280,iw)':-2\" -r 30 -pix_fmt yuv420p " .
            "-c:v libx264 -preset medium -crf 23 -profile:v high -level 4.0 " .
            "-c:a aac -b:a 128k -movflags +faststart -reset_timestamps 1 -avoid_negative_ts make_zero " .
            "-map 0:v:0? -map 0:a:0? " .
            escapeshellarg($processedPath) . " -y 2>&1";

        exec($cmd, $output, $returnVar);

        if ($returnVar !== 0) {
            Log::error('FFMPEG error podczas scalania/konwersji', [
                'output' => $output,
                'uploadId' => $this->uploadId,
                'cmd' => $cmd
            ]);
            // Mimo błędu spróbujmy posprzątać, jeśli to możliwe, lub zostawiamy do diagnozy
            return;
        }

        // Przenosimy przetworzony plik do docelowej lokalizacji
        if (file_exists($processedPath)) {
            rename($processedPath, $finalFullPath);
        } else {
            Log::error('Plik przetworzony nie istnieje mimo sukcesu FFmpeg', ['path' => $processedPath]);
            return;
        }

        // Aktualizacja lub tworzenie rekordu CvVideo
        try {
            if ($this->cvVideoId) {
                CvVideo::where('id', $this->cvVideoId)->update([
                    'file_path' => $finalPath,
                ]);
            } else {
                CvVideo::create([
                    'temp_session_id' => $this->uploadId,
                    'project_id'      => $this->projectId,
                    'user_id'         => $this->userId,
                    'file_path'       => $finalPath,
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Nie udało się stworzyć CvVideo', [
                'error' => $e->getMessage(),
                'uploadId' => $this->uploadId,
                'projectId'=> $this->projectId,
                'userId'   => $this->userId,
                'filePath' => $finalPath
            ]);
        }

        // Usuń folder tymczasowy
        Storage::disk('local')->deleteDirectory($tempDir);
    }
}
