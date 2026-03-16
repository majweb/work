<?php

namespace App\Exports;

use App\Models\PointHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PointHistoryExport implements FromCollection, WithHeadings, WithMapping
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Firma',
            'Operacja',
            'Szczegóły',
            'Wartość',
            'Aktualne saldo',
            'Data',
        ];
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->user->firm->name ?? $row->user->name ?? '-',
            $row->type === 'purchase' ? 'ZAKUP' : 'ZUŻYCIE',
            PointHistory::translateActionName($row->action_name),
            $row->points . ' pkt',
            $row->balance_after . ' pkt',
            $row->created_at ? $row->created_at->format('Y-m-d H:i:s') : '-',
        ];
    }

}
