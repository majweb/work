<?php

namespace App\Exports;

use App\Http\Controllers\Admin\ExternalCompanyController;
use App\Models\ExternalCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExternalCompaniesExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithMapping
{
    public function __construct(
        protected ?array $ids = null,
        protected ?Request $request = null
    ) {}

    public function collection(): Collection
    {
        if ($this->request) {
            $query = app(ExternalCompanyController::class)->buildQuery($this->request);
        } else {
            $query = ExternalCompany::with(['user'])->withCount('projects');
        }

        if (! empty($this->ids)) {
            $query->whereIn('external_companies.id', $this->ids);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nazwa',
            'Skrót',
            'Email',
            'Agencja',
            'Data utworzenia',
        ];
    }

    /**
     * @param  ExternalCompany  $company
     */
    public function map($company): array
    {
        return [
            $company->id,
            $company->name,
            $company->abbreviation,
            $company->email,
            $company->user?->name ?? '-',
            $company->created_at->format('Y-m-d H:i'),
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => true,
        ];
    }
}
