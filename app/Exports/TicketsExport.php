<?php

namespace App\Exports;

use App\Models\Ticket;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TicketsExport implements FromCollection, WithHeadings, WithMapping
{
    public function __construct(protected $filters)
    {
    }

    public function collection()
    {
        return Ticket::with('user')
            ->when($this->filters['type'] ?? null, function ($query, $type) {
                $query->where('type', $type);
            })
            ->when($this->filters['subject'] ?? null, function ($query, $subject) {
                $query->where('subject', 'like', '%' . $subject . '%');
            })
            ->when($this->filters['user'] ?? null, function ($query, $user) {
                $query->whereHas('user', function ($q) use ($user) {
                    $q->where('name', 'like', '%' . $user . '%');
                });
            })
            ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Użytkownik',
            'Temat',
            'Treść',
            'Typ',
            'Data utworzenia',
        ];
    }

    public function map($ticket): array
    {
        $types = [
            'question' => 'Pytanie',
            'tech_problem' => 'Problem techniczny',
            'new_feature' => 'Nowa funkcja'
        ];

        return [
            $ticket->id,
            $ticket->user?->name,
            $ticket->subject,
            $ticket->content,
            $types[$ticket->type] ?? $ticket->type,
            $ticket->created_at->toDateTimeString(),
        ];
    }
}
