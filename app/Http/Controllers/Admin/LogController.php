<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

use Illuminate\Http\Response as HttpResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class LogController extends Controller
{
    /**
     * Display the log file content.
     */
    public function index(): Response
    {
        $logPath = storage_path('logs/laravel.log');
        $content = '';

        if (File::exists($logPath)) {
            $content = File::get($logPath);
        }

        return Inertia::render('Admin/Logs/Index', [
            'content' => $content,
        ]);
    }

    /**
     * Download the log file.
     */
    public function download(): HttpResponse|BinaryFileResponse
    {
        $logPath = storage_path('logs/laravel.log');

        if (!File::exists($logPath)) {
            return back()->with('error', 'Plik logów nie istnieje.');
        }

        return response()->download($logPath);
    }

    /**
     * Clear the log file content.
     */
    public function clear(): RedirectResponse
    {
        $logPath = storage_path('logs/laravel.log');

        if (File::exists($logPath)) {
            File::put($logPath, '');
        }

        return back()->with('success', 'Logi zostały wyczyszczone.');
    }
}
