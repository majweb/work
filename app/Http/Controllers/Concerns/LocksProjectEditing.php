<?php

namespace App\Http\Controllers\Concerns;

use App\Models\Project;
use Illuminate\Http\RedirectResponse;

/**
 * Firma i rekruter edytują ogłoszenie tylko przez 24h od publikacji, a pracodawcy, stanowiska,
 * stawki i miejsca pracy po publikacji nie zmieniają nigdy (szkic - np. duplikat - można poprawić cały).
 * Admin edytuje bez ograniczeń (Admin\JobOfferController).
 */
trait LocksProjectEditing
{
    protected function projectEditLockedResponse(string $indexRoute): RedirectResponse
    {
        return to_route($indexRoute)->with([
            'flash.banner' => __('projectLock.editLocked'),
            'flash.bannerStyle' => 'danger',
        ]);
    }

    /**
     * Dane z formularza edycji z zablokowanymi polami podmienionymi na wartości z bazy
     * (tylko opublikowane ogłoszenie - w szkicu firma może zmienić wszystko).
     *
     * @param  array<string, mixed>  $projectData
     * @return array<string, mixed>
     */
    protected function withLockedProjectFields(array $projectData, Project $project): array
    {
        if ($project->published_at === null) {
            return $projectData;
        }

        return array_merge($projectData, $project->ownerLockedValues());
    }
}
