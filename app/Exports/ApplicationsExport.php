<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicationsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $applications;

    public function __construct($applications)
    {
        $this->applications = $applications;
    }


    public function collection()
    {
        return $this->applications->map(function ($application) {
            return [
                'ID' => $application->id,
                __('translate.name') => $application->name,
                __('translate.surname') => $application->surname,
                __('translate.phone') => $application->phone,
                __('translate.email') => $application->email,
                __('translate.applicationStatus') => $application->status == 'yes' ? __('translate.statusYes') : ($application->status == 'no' ? __('translate.statusNo') : ($application->status == 'maybe' ? __('translate.statusMaybe') : '')),
                __('translate.project') => $application->project_id,
                __('translate.date') . ' ' . __('translate.applys') => $application->created_at->format('Y-m-d H:i:s'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            __('translate.name'),
            __('translate.surname'),
            __('translate.phone'),
            __('translate.email'),
            __('translate.applicationStatus'),
            __('translate.project'),
            __('translate.date') . ' ' . __('translate.apply'),
        ];
    }
}
