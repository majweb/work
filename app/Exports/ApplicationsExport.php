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
            // Pobierz pierwszy język z CV
            $firstLang = '-';
            $firstLangLevel = '-';

            if ($application->cvClassic && !empty($application->cvClassic->langs)) {
                $langs = $application->cvClassic->langs;
                if (isset($langs[0])) {
                    // Struktura: langs[0]['name']['label'] i langs[0]['level']['name']
                    $firstLang = $langs[0]['name']['label'] ?? $langs[0]['name']['value'] ?? '-';
                    $firstLangLevel = $langs[0]['level']['name'] ?? '-';
                }
            }

            // Pobierz informację o prawie jazdy z wymagań projektu
            $driveLicense = __('translate.statusNo');
            if ($application->project && !empty($application->project->wait)) {
                $waits = is_string($application->project->wait)
                    ? json_decode($application->project->wait, true)
                    : $application->project->wait;

                if (is_array($waits)) {
                    foreach ($waits as $wait) {
                        if (isset($wait['id']) && $wait['id'] == 19) {
                            $driveLicense = __('translate.statusYes');
                            break;
                        }
                    }
                }
            }

            // Status w polskiej wersji
            $statusText = '';
            if ($application->status == 'yes') {
                $statusText = __('translate.statusYes');
            } elseif ($application->status == 'no') {
                $statusText = __('translate.statusNo');
            } elseif ($application->status == 'maybe') {
                $statusText = __('translate.statusMaybe');
            } else {
                $statusText = '-';
            }

            // Typ CV
            $cvType = __('translate.cv_classic');
            if ($application->cvAudio) {
                $cvType = __('translate.cv_audio');
            } elseif ($application->cvVideo) {
                $cvType = __('translate.cv_video');
            }

            // Kandydat
            $hasCandidate = $application->worker && $application->worker->candidate ? __('translate.statusYesLabel') : __('translate.statusNoLabel');

            // Dane projektu
            $country = $application->project->countryWork['allTranslations']['title'][app()->getLocale()] ?? $application->project->countryWork['name'] ?? '-';
            $city = $application->project->cityWork ?? '-';
            $category = $application->project->category['allTranslations']['title'][app()->getLocale()] ?? $application->project->category['name'] ?? '-';
            $categorySub = $application->project->categorySub['allTranslations']['title'][app()->getLocale()] ?? $application->project->categorySub['name'] ?? '-';
            $profession = $application->project->profession['allTranslations']['title'][app()->getLocale()] ?? $application->project->profession['name'] ?? '-';
            $position = $application->project->position['allTranslations']['title'][app()->getLocale()] ?? $application->project->position['name'] ?? '-';

            // Firma i Rekruter
            $firmName = $application->project->user->firm->name ?? $application->project->user->name ?? '-';
            $recruiterName = $application->project->recruit->name ?? $application->openedBy->name ?? '-';

            return [
                'ID' => $application->id,
                __('translate.nameUser') => $application->name,
                __('translate.surname') => $application->surname,
                __('translate.firm') => $firmName,
                __('translate.recruiter') => $recruiterName,
                __('translate.country') => $country,
                __('translate.City') => $city,
                __('translate.category') => $category,
                __('translate.categorySub') => $categorySub,
                __('translate.profession') => $profession,
                __('translate.position') => $position,
                __('translate.status') => $statusText,
                __('translate.date') => $application->created_at ? $application->created_at->format('d.m.Y') : '-',
                __('translate.note') => $application->notes[0]['content'] ?? '-',
                __('translate.language') => $firstLang,
                __('translate.languageLevel') => $firstLangLevel,
                __('translate.driveLicense') => $driveLicense,
                __('translate.cvType') => $cvType,
                __('translate.candidateCreated') => $hasCandidate,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            __('translate.nameUser'),
            __('translate.surname'),
            __('translate.firm'),
            __('translate.recruiter'),
            __('translate.country'),
            __('translate.City'),
            __('translate.category'),
            __('translate.categorySub'),
            __('translate.profession'),
            __('translate.position'),
            __('translate.status'),
            __('translate.date'),
            __('translate.note'),
            __('translate.language'),
            __('translate.languageLevel'),
            __('translate.driveLicense'),
            __('translate.cvType'),
            __('translate.candidateCreated'),
        ];
    }
}
