<?php

namespace App\Console\Commands;

use App\Models\ChangeProduct;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ClearExpiredProductsCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clear-expired-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears cache for products whose featuring has expired in the last 10 minutes';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $expiredProducts = ChangeProduct::where("product_id", 9)
            ->where("end", "<", now())
            ->where("end", ">=", now()->subMinutes(10))
            ->with("user.projects")
            ->get();

//        dd($expiredProducts);
        if ($expiredProducts->isEmpty()) {
            return;
        }
        $locales = config("langsShorts", ["pl", "en", "de"]);
        $subCategoryIds = [];

        foreach ($expiredProducts as $changeProduct) {
            $user = $changeProduct->user;
            if (!$user) {
                continue;
            }

            foreach ($user->projects as $project) {
                foreach ($locales as $locale) {
                    Cache::forget("project_single_{$project->id}_{$locale}");
                }

                $categorySub = is_string($project->categorySub)
                    ? json_decode($project->categorySub, true)
                    : $project->categorySub;

                if (isset($categorySub["id"])) {
                    $subCategoryIds[] = $categorySub["id"];
                }
            }
        }

        $uniqueSubCategories = array_unique($subCategoryIds);
        foreach ($uniqueSubCategories as $subId) {
            foreach ($locales as $locale) {
                Cache::forget("similar_projects_{$subId}_{$locale}");
                for ($h = 0; $h < 24; $h++) {
                    $hour = str_pad($h, 2, "0", STR_PAD_LEFT);
                    Cache::forget("similar_projects_{$subId}_{$locale}_{$hour}");
                }
            }
        }

        $version = Cache::get("projects_list_version", 1);
        Cache::forever("projects_list_version", $version + 1);
        Log::info("Expired products cache cleared.");
    }
}
