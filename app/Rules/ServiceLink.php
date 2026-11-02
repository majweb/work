<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Link na wizytówce firmy (opinie, sociale) musi prowadzić do właściwego serwisu - sprawdzana jest
 * domena, więc działają też wersje krajowe, mobilne i krótkie linki udostępniania.
 */
class ServiceLink implements ValidationRule
{
    /**
     * Dozwolone domeny: dokładna nazwa albo wzorzec (dowolne subdomeny dopuszcza się wzorcem).
     */
    private const HOSTS = [
        // google.com, google.pl, google.co.uk, google.com.br, www./maps./business. + linki "Udostępnij"
        'google' => ['/^([a-z0-9-]+\.)*google\.(com|[a-z]{2}|co\.[a-z]{2}|com\.[a-z]{2})$/', 'maps.app.goo.gl', 'g.page', 'share.google'],
        'trustpilot' => ['/^([a-z0-9-]+\.)*trustpilot\.com$/'],
        'facebook' => ['/^([a-z0-9-]+\.)*facebook\.com$/', 'fb.com', 'www.fb.com'],
        'x' => ['/^([a-z0-9-]+\.)*(x|twitter)\.com$/'],
        'instagram' => ['/^([a-z0-9-]+\.)*instagram\.com$/', 'instagr.am'],
        'linkedin' => ['/^([a-z0-9-]+\.)*linkedin\.com$/', 'lnkd.in'],
        'tiktok' => ['/^([a-z0-9-]+\.)*tiktok\.com$/'],
    ];

    public function __construct(private string $service) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! self::matches($this->service, $value)) {
            $fail(__('serviceLinks.invalid_'.$this->service));
        }
    }

    public static function matches(string $service, mixed $url): bool
    {
        if (! is_string($url) || ! preg_match('#^https?://#i', $url)) {
            return false;
        }

        $host = strtolower((string) parse_url($url, PHP_URL_HOST));

        foreach (self::HOSTS[$service] as $allowed) {
            if (str_starts_with($allowed, '/') ? preg_match($allowed, $host) === 1 : $host === $allowed) {
                return true;
            }
        }

        return false;
    }
}
