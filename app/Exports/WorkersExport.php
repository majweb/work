<?php

namespace App\Exports;

use App\Http\Controllers\Admin\WorkerController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class WorkersExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithMapping
{
    public function __construct(protected Request $request) {}

    public function collection()
    {
        $query = WorkerController::buildQuery($this->request);

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
            'Imię',
            'Nazwisko',
            'Email',
            'Telefon',
            'Status',
            'Profil kandydata',
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

        return [
            $user->id,
            $user->name,
            $user->workerDetail?->surname ?? '-',
            $user->email,
            $user->workerDetail?->contact_phone ?? '-',
            $status,
            $user->candidate ? 'Tak' : 'Nie',
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
