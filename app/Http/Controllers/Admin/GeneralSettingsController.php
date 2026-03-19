<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Inertia\Inertia;
use Inertia\Response;

class GeneralSettingsController extends Controller
{
    public function edit(): Response
    {
        return Inertia::render('Admin/Settings/General', [
            'settings' => [
                'app_name' => config('app.name'),
                'app_url' => config('app.url'),
                'app_debug' => config('app.debug'),
                'is_maintenance' => app()->isDownForMaintenance(),
            ],
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'app_name' => 'required|string|max:255',
            'app_url' => 'required|url|max:255',
            'app_debug' => 'required|boolean',
            'is_maintenance' => 'required|boolean',
        ]);

        $this->updateEnv([
            'APP_NAME' => '"'.$validated['app_name'].'"',
            'APP_URL' => $validated['app_url'],
            'APP_DEBUG' => $validated['app_debug'] ? 'true' : 'false',
        ]);

        if ($validated['is_maintenance'] && ! app()->isDownForMaintenance()) {
            Artisan::call('down', ['--refresh' => 15]);
        } elseif (! $validated['is_maintenance'] && app()->isDownForMaintenance()) {
            Artisan::call('up');
        }

        return redirect()->back()->with('flash.banner', 'Ustawienia zostały zaktualizowane.');
    }

    protected function updateEnv(array $data): void
    {
        $path = base_path('.env');

        if (! file_exists($path)) {
            return;
        }

        $content = file_get_contents($path);

        foreach ($data as $key => $value) {
            $content = preg_replace(
                "/^{$key}=.*/m",
                "{$key}={$value}",
                $content
            );
        }

        file_put_contents($path, $content);
    }
}
