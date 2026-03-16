<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'action_name',
        'points',
        'balance_after',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function getActionTranslations(): array
    {
        return [
            'UnlockQuestions' => 'Odblokowanie pytań',
            'CreateCandidate' => 'Utworzenie kandydata',
            'ExportAplications' => 'Eksport aplikacji',
            'CreateExternalFirm' => 'Utworzenie firmy zewnętrznej',
            'AddVideoToProfile' => 'Dodanie wideo do profilu',
            'OpenAppWithVideo' => 'Otwarcie aplikacji z wideo',
            'OpenAppWithPdf' => 'Otwarcie aplikacji z PDF',
            'OpenAppWithAudio' => 'Otwarcie aplikacji z audio',
            'sendReservedProject' => 'Wysłanie zarezerwowanego projektu',
            'BuyProduct' => 'Zakup produktu',
            'Purchase' => 'Zakup',
            'Purchase: Points' => 'Zakup punktów',
            'Purchase: Points (webhook)' => 'Zakup punktów (webhook)',
            'Admin: Manually added credits' => 'Admin: Ręcznie dodane kredyty',
            'Admin: Manually set credits' => 'Admin: Ręcznie ustawione kredyty',
            'SendToExternalFirm' => 'Wysłanie do firmy zewnętrznej',
        ];
    }

    public static function translateActionName(?string $action): string
    {
        if (!$action) {
            return '-';
        }

        $translations = self::getActionTranslations();

        if (isset($translations[$action])) {
            return $translations[$action];
        }

        $parts = explode(':', $action);
        $baseAction = trim($parts[0]);

        // Dynamiczne tłumaczenie dla "BuyProduct: Nazwa produktu"
        if ($baseAction === 'BuyProduct' && count($parts) > 1) {
            $productName = trim(implode(':', array_slice($parts, 1)));
            return 'Zakup produktu: ' . $productName;
        }

        if (count($parts) > 1) {
            $prefix = $translations[$baseAction] ?? $baseAction;
            return $prefix . ': ' . trim(implode(':', array_slice($parts, 1)));
        }

        return $translations[$baseAction] ?? $action;
    }
}
