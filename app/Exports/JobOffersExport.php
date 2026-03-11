<?php

namespace App\Exports;

use App\Http\Controllers\Admin\JobOfferController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JobOffersExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithMapping
{
    public function __construct(protected Request $request) {}

    public function collection()
    {
        $jobOfferController = new JobOfferController();
        $query = $jobOfferController->buildQuery($this->request);

        if ($this->request->filled('ids')) {
            $ids = is_array($this->request->ids) ? $this->request->ids : explode(',', $this->request->ids);
            $query->whereIn('id', $ids);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Tytuł',
            'Firma',
            'Branża',
            'Lokalizacja',
            'Status',
            'CV',
            'Liczba aplikacji',
            'Data publikacji',
        ];
    }

    public function map($project): array
    {
        $cvTypes = collect($project->cv)->map(function ($cv) {
            // Check if name is already a translated string or needs translation
            $name = $cv['name'] ?? null;
            return $this->getTranslation($name);
        })->filter()->implode(', ');

        return [
            $project->id,
            $this->getTranslation($project->title),
            $project->user?->name ?? $project->externalCompany?->name ?? '-',
            $this->getTranslation($project->category),
            $this->getTranslation($project->countryWork) . ', ' . $project->cityWork,
            $project->is_active ? 'Aktywna' : 'Nieaktywna',
            $cvTypes ?: '-',
            $project->aplications_count ?? $project->aplications->count(),
            $project->created_at?->format('Y-m-d H:i') ?? '-',
        ];
    }

    protected function getTranslation($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $value = $decoded;
            }
        }

        if (is_array($value)) {
            // Check for 'allTranslations' structure
            if (isset($value['allTranslations']['title'])) {
                $titles = $value['allTranslations']['title'];
                return $titles['pl'] ?? $titles['en'] ?? reset($titles);
            }
            if (isset($value['allTranslations'])) {
                $trans = $value['allTranslations'];
                return $trans['pl'] ?? $trans['en'] ?? reset($trans);
            }

            // Check for simple translation structure
            return $value['pl'] ?? $value['en'] ?? $value['name'] ?? reset($value);
        }

        return $value;
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => true,
        ];
    }
}
