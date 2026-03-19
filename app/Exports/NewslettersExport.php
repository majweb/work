<?php

namespace App\Exports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class NewslettersExport implements FromCollection, WithHeadings, WithMapping
{
    public function __construct(protected $query)
    {
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->query->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Email',
            'Kod kraju',
            'Data zapisu',
        ];
    }

    /**
    * @param Newsletter $newsletter
    */
    public function map($newsletter): array
    {
        return [
            $newsletter->id,
            $newsletter->email,
            $newsletter->country_code,
            $newsletter->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
