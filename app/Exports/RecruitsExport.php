<?php

namespace App\Exports;

use App\Http\Controllers\Admin\RecruitController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RecruitsExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithMapping
{
    public function __construct(protected Request $request) {}

    public function collection()
    {
        $query = RecruitController::buildQuery($this->request);

        if ($this->request->filled('ids')) {
            $ids = is_array($this->request->ids) ? $this->request->ids : explode(',', $this->request->ids);
            $query->whereIn('users.id', $ids);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Imię i nazwisko',
            'Główny',
            'Email',
            'Firma',
            'Projekty',
            'Aplikacje',
            'Status',
            'Data rejestracji',
        ];
    }

    public function map($user): array
    {
        $status = 'Aktywny';
        if ($user->user_blocked) {
            $status = 'Zablokowany';
        } elseif (! $user->email_verified_at) {
            $status = 'Niezweryfikowany email';
        }

        $isMain = $user->roles->contains('name', 'firm') ? 'Tak' : 'Nie';

        return [
            $user->id,
            $user->name,
            $isMain,
            $user->email,
            $user->user?->firm?->name ?? $user->user?->name ?? '-',
            $user->projects_recruits_count ?? 0,
            $user->applications_recruits_count ?? 0,
            $status,
            $user->created_at?->format('Y-m-d H:i') ?? '-',
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => true,
        ];
    }
}
