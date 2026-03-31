<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FirmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('user')->id;
        $firmId = $this->route('user')->firm?->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'details.nip' => [
                'required',
                'string',
                $this->getNipValidationRule($this->input('details.countryJson.countryCode') ?? null),
                Rule::unique('firms', 'nip')->ignore($firmId),
            ],
            'details.regon' => [
                'nullable',
                'string',
                Rule::unique('firms', 'regon')->ignore($firmId),
            ],
            'details.description' => ['required', 'string', 'max:1000'],
            'details.street' => ['required', 'string', 'max:60'],
            'details.number' => ['required', 'string', 'max:60'],
            'details.city' => ['required', 'string', 'max:60'],
            'details.postal' => ['required', 'string', 'max:60'],
            'details.countryJson' => ['required', 'array'],

            'details.invoice_same' => ['boolean'],

            'details.name_invoice' => [
                'required_if:details.invoice_same,false',
                'nullable',
                'string',
                'max:100',
                Rule::unique('firms', 'name_invoice')->ignore($firmId),
            ],

            'details.nip_invoice' => [
                'required_if:details.invoice_same,false',
                'nullable',
                'string',
                $this->input('details.invoice_same') ? 'nullable' : $this->getNipValidationRule($this->input('details.countryInvoiceJson.countryCode') ?? ($this->input('details.countryJson.countryCode') ?? null)),
                Rule::unique('firms', 'nip_invoice')->ignore($firmId),
            ],

            'details.regon_invoice' => [
                'required_if:details.invoice_same,false',
                'nullable',
                'numeric',
                'digits_between:1,20',
                Rule::unique('firms', 'regon_invoice')->ignore($firmId),
            ],

            'details.street_invoice' => ['required_if:details.invoice_same,false', 'nullable', 'string', 'max:60'],
            'details.number_invoice' => ['required_if:details.invoice_same,false', 'nullable', 'string', 'max:60'],
            'details.city_invoice' => ['required_if:details.invoice_same,false', 'nullable', 'string', 'max:60'],
            'details.postal_invoice' => ['required_if:details.invoice_same,false', 'nullable', 'string', 'max:60'],
            'details.countryInvoiceJson' => ['required_if:details.invoice_same,false', 'nullable', 'array'],

            'details.www' => ['required', 'string', 'url:http,https', 'max:255'],
            'details.count_workers' => ['nullable', 'integer', 'digits_between:1,5'],
            'details.annual_turnover' => ['nullable', 'string', 'max:50'],
            'details.extra_description' => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        $nipPlaceholder = $this->getNipPlaceholder($this->input('details.countryJson.countryCode') ?? null);
        $nipInvoicePlaceholder = $this->getNipPlaceholder($this->input('details.countryInvoiceJson.countryCode') ?? ($this->input('details.countryJson.countryCode') ?? null));

        return [
            'details.nip.regex' => __('translate.footer.invalid_nip_format') . ' (' . __('translate.footer.suggested_format') . ': ' . $nipPlaceholder . ')',
            'details.nip_invoice.regex' => __('translate.footer.invalid_nip_format') . ' (' . __('translate.footer.suggested_format') . ': ' . $nipInvoicePlaceholder . ')',
        ];
    }

    protected function getNipValidationRule(?string $countryCode): array|string|object
    {
        if (! $countryCode) {
            return ['string', 'max:30'];
        }

        $code = strtolower($countryCode);

        // 1. Grupa "Czysto Cyfrowa" (9-10 cyfr)
        $pureDigital9 = ['eg', 'gn', 'gw', 'mz', 'rw', 'lr', 'co', 'jm', 'ge', 'il', 'np', 'lk', 'sy', 'tj', 'uz', 'by', 'rs', 'fj'];
        $pureDigital10 = ['ao', 'bi', 'et', 'ly', 'mg', 'sd', 'tg', 'ug', 'zm', 'ht', 'cr', 'af', 'az', 'iq', 'qa', 'kw', 'tr'];

        if (in_array($code, $pureDigital9)) {
            return 'regex:/^\d{9}$/';
        }
        if (in_array($code, $pureDigital10)) {
            return 'regex:/^\d{10}$/';
        }

        // 2. Grupa "Długie Ciągi Cyfrowe" (11-15 cyfr)
        if (in_array($code, ['gm', 'ar', 'pe', 'cu'])) {
            return 'regex:/^\d{11}$/';
        }
        if (in_array($code, ['bd', 'la', 'mm', 'ua', 'kz'])) {
            return 'regex:/^\d{12}$/';
        }
        if (in_array($code, ['bj', 'cg', 'md', 'ba'])) {
            return 'regex:/^\d{13}$/';
        }
        if (in_array($code, ['sv', 'hn', 'kg'])) {
            return 'regex:/^\d{14}$/';
        }
        if (in_array($code, ['dz', 'sa', 'bh', 'ae', 'id'])) {
            return 'regex:/^\d{15}$/';
        }

        // 3. Grupa "Alfanumeryczna"
        if ($code === 'bw') {
            return 'regex:/^C\d+$/i'; // Botswana C...
        }
        if ($code === 'cd') {
            return 'regex:/^A\d+$/i'; // DRK A...
        }
        if ($code === 'cm') {
            return 'regex:/^(M\d+|[A-Z\d]+A)$/i'; // Kamerun M... lub ...A
        }
        if ($code === 'ke') {
            return 'regex:/^[PA]\d+L$/i'; // Kenia P/A...L
        }
        if ($code === 've') {
            return 'regex:/^[JVG]\d+$/i'; // Wenezuela J/V/G...
        }
        if ($code === 'my') {
            return 'regex:/^(C|SG)\d+$/i'; // Malezja C/SG...
        }
        if ($code === 'al') {
            return 'regex:/^J\d+$/i'; // Albania J...
        }
        if ($code === 'ad') {
            return 'regex:/^U\d+$/i'; // Andora U...
        }
        if (in_array($code, ['bf', 'td', 'ga', 'cf', 'ci'])) {
            return 'regex:/^[A-Z\d]+[AB]$/i'; // Kończące się na A/B
        }
        if ($code === 'ne') {
            return 'regex:/^\d{5}\/R$/i'; // Niger 12345/R
        }
        if ($code === 'sn') {
            return 'regex:/^\d{7}[A-Z0-9]{3}$/i'; // Senegal 7 cyfr + 3 znaki
        }
        if ($code === 'in') {
            return 'regex:/^[A-Z]{5}\d{4}[A-Z]$/i'; // Indie PAN: 5 liter + 4 cyfry + 1 litera
        }

        // 4. Grupa "Prefiks Krajowy" (Standard EU)
        $euPrefix = ['at', 'be', 'bg', 'hr', 'cz', 'dk', 'ee', 'fi', 'gr', 'de', 'lt', 'lu', 'mt', 'pl', 'pt', 'ro', 'sk', 'si', 'hu', 'gb'];
        if (in_array($code, $euPrefix)) {
            $prefix = strtoupper($code === 'gr' ? 'EL' : $code);

            return "regex:/^{$prefix}[A-Z\d]+$/i";
        }

        // Specyficzne EU
        if ($code === 'fr') {
            return 'regex:/^FR[A-Z\d]{2}\d{9}$/i';
        }
        if ($code === 'nl') {
            return 'regex:/^NL\d{9}B\d{2}$/i';
        }
        if ($code === 'ch') {
            return 'regex:/^CHE-\d{9}(MWST)?$/i';
        }
        if ($code === 'se') {
            return 'regex:/^SE\d{12}$/i';
        }
        if ($code === 'it') {
            return 'regex:/^IT\d{11}$/i';
        }

        // 5. Grupa "Krótkie Numery" (5-8 cyfr)
        if (in_array($code, ['is', 'li', 'sm', 'nr'])) {
            return 'regex:/^\d{5,6}$/';
        }
        if (in_array($code, ['bz', 'gd', 'kn', 'tv'])) {
            return 'regex:/^\d{6}$/';
        }
        if (in_array($code, ['er', 'km', 'ls', 'ag', 'bs', 'dm'])) {
            return 'regex:/^\d{7}$/';
        }
        if (in_array($code, ['ma', 'mr', 'mu', 'sr', 'am', 'me'])) {
            return 'regex:/^\d{8}$/';
        }
        if ($code === 'au') {
            return 'regex:/^\d{8,9}$/'; // Australia TFN - 8/9
        }

        return ['string', 'max:30'];
    }

    public function getNipPlaceholder(?string $countryCode): string
    {
        if (! $countryCode) {
            return '---';
        }

        $code = strtolower($countryCode);

        // 1. Grupa "Czysto Cyfrowa" (9-10 cyfr)
        $pureDigital9 = ['eg', 'gn', 'gw', 'mz', 'rw', 'lr', 'co', 'jm', 'ge', 'il', 'np', 'lk', 'sy', 'tj', 'uz', 'by', 'rs', 'fj'];
        $pureDigital10 = ['ao', 'bi', 'et', 'ly', 'mg', 'sd', 'tg', 'ug', 'zm', 'ht', 'cr', 'af', 'az', 'iq', 'qa', 'kw', 'tr'];

        if (in_array($code, $pureDigital9)) {
            return '123456789';
        }
        if (in_array($code, $pureDigital10)) {
            return '1234567890';
        }

        // 2. Grupa "Długie Ciągi Cyfrowe" (11-15 cyfr)
        if (in_array($code, ['gm', 'ar', 'pe', 'cu'])) {
            return '12345678901';
        }
        if (in_array($code, ['bd', 'la', 'mm', 'ua', 'kz'])) {
            return '123456789012';
        }
        if (in_array($code, ['bj', 'cg', 'md', 'ba'])) {
            return '1234567890123';
        }
        if (in_array($code, ['sv', 'hn', 'kg'])) {
            return '12345678901234';
        }
        if (in_array($code, ['dz', 'sa', 'bh', 'ae', 'id'])) {
            return '123456789012345';
        }

        // 3. Grupa "Alfanumeryczna"
        if ($code === 'bw') {
            return 'C1234567';
        }
        if ($code === 'cd') {
            return 'A1234567';
        }
        if ($code === 'cm') {
            return 'M123456789012A';
        }
        if ($code === 'ke') {
            return 'P123456789L';
        }
        if ($code === 've') {
            return 'J123456789';
        }
        if ($code === 'my') {
            return 'C12345678';
        }
        if ($code === 'al') {
            return 'J12345678A';
        }
        if ($code === 'ad') {
            return 'U1234567A';
        }
        if (in_array($code, ['bf', 'td', 'ga', 'cf', 'ci'])) {
            return '12345678A';
        }
        if ($code === 'ne') {
            return '12345/R';
        }
        if ($code === 'sn') {
            return '1234567ABC';
        }
        if ($code === 'in') {
            return 'ABCDE1234F';
        }

        // 4. Grupa "Prefiks Krajowy" (Standard EU)
        $euPrefix = ['at', 'be', 'bg', 'hr', 'cz', 'dk', 'ee', 'fi', 'gr', 'de', 'lt', 'lu', 'mt', 'pl', 'pt', 'ro', 'sk', 'si', 'hu', 'gb'];
        if (in_array($code, $euPrefix)) {
            $prefix = strtoupper($code === 'gr' ? 'EL' : $code);

            return "{$prefix}12345678";
        }

        // Specyficzne EU
        if ($code === 'fr') {
            return 'FRXX123456789';
        }
        if ($code === 'nl') {
            return 'NL123456789B01';
        }
        if ($code === 'ch') {
            return 'CHE-123.456.789 MWST';
        }
        if ($code === 'se') {
            return 'SE123456789012';
        }
        if ($code === 'it') {
            return 'IT12345678901';
        }

        // 5. Grupa "Krótkie Numery" (5-8 cyfr)
        if (in_array($code, ['is', 'li', 'sm', 'nr'])) {
            return '12345';
        }
        if (in_array($code, ['bz', 'gd', 'kn', 'tv'])) {
            return '123456';
        }
        if (in_array($code, ['er', 'km', 'ls', 'ag', 'bs', 'dm'])) {
            return '1234567';
        }
        if (in_array($code, ['ma', 'mr', 'mu', 'sr', 'am', 'me'])) {
            return '12345678';
        }
        if ($code === 'au') {
            return '123456789';
        }

        return '12345678';
    }

    public function attributes(): array
    {
        return [
            'name' => strtolower(__('translate.name')),
            'email' => strtolower(__('translate.email')),
            'details.nip' => strtolower(__('translate.nip')),
            'details.regon' => strtolower(__('translate.regon')),
            'details.description' => strtolower(__('translate.description')),
            'details.street' => strtolower(__('translate.Street')),
            'details.number' => strtolower(__('translate.number')),
            'details.city' => strtolower(__('translate.City')),
            'details.postal' => strtolower(__('translate.Postal')),
            'details.countryJson' => strtolower(__('translate.Country')),
            'details.www' => strtolower(__('translate.www')),
            'details.count_workers' => strtolower(__('translate.count_workers')),
            'details.annual_turnover' => strtolower(__('translate.annual_turnover')),
            'details.extra_description' => strtolower(__('translate.extra_description')),
            'details.name_invoice' => strtolower(__('translate.name')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.nip_invoice' => strtolower(__('translate.nip')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.regon_invoice' => strtolower(__('translate.regon')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.street_invoice' => strtolower(__('translate.Street')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.number_invoice' => strtolower(__('translate.number')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.city_invoice' => strtolower(__('translate.City')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.postal_invoice' => strtolower(__('translate.Postal')) . ' (' . strtolower(__('translate.Invoice')) . ')',
            'details.countryInvoiceJson' => strtolower(__('translate.Country')) . ' (' . strtolower(__('translate.Invoice')) . ')',
        ];
    }
}
