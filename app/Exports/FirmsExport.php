<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FirmsExport implements FromCollection, WithHeadings, WithMapping
{
    public function __construct(
        protected ?array $ids = null,
        protected ?Request $request = null
    ) {}

    public function collection(): Collection
    {
        if ($this->request) {
            $query = app(\App\Http\Controllers\Admin\FirmController::class)->buildQuery($this->request);
        } else {
            $query = User::role('firm')->with(['firm', 'recruits', 'projects'])->withCount(['recruits', 'projects']);
        }

        if (! empty($this->ids)) {
            $query->whereIn('users.id', $this->ids);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nazwa',
            'Email',
            'Kraj',
            'Miasto',
            'Liczba rekruterów',
            'Liczba ofert',
            'Kredyty',
            'Status',
        ];
    }

    /**
     * @param  User  $user
     */
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->firm?->country ?? '-',
            $user->firm?->city ?? '-',
            $user->recruits_count ?? 0,
            $user->projects_count ?? 0,
            $user->firm?->points ?? 0,
            $this->getStatusLabel($user),
        ];
    }

    private function getStatusLabel(User $user): string
    {
        if ($user->user_blocked) {
            return 'Zawieszony';
        }
        if ($user->email_verified_at) {
            return 'Zweryfikowany';
        }

        return 'Niezweryfikowany';
    }
}
