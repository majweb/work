<?php

namespace App\Support;

/**
 * Startowa lista zakazanych słów w wiadomościach (migracja tabel wiadomości).
 * Gwiazdka na końcu = rdzeń, łapie wszystkie odmiany ("kurw*" -> kurwa, kurwy...).
 * Bez gwiazdki = tylko całe słowo. Wielkość liter i polskie znaki nie mają znaczenia.
 * Słowa w innych językach admin dodaje w panelu (Bezpieczeństwo -> Zakazane słowa).
 */
class DefaultForbiddenWords
{
    /**
     * @return array<int, string>
     */
    public static function all(): array
    {
        return [
            // Wulgaryzmy (rdzenie łapią odmiany).
            'huj*', 'chuj*', 'kurw*', 'wkurw*', 'jeb*', 'zajeb*', 'podjeb*', 'odjeb*',
            'wyjeb*', 'przyjeb*', 'rozjeb*', 'zjeb*', 'pierdol*', 'spierdol*',
            'rozpierdol*', 'dopierdol*', 'wpierdol*', 'zapierdal*', 'opierdal*',
            'pizd*', 'kutas*', 'cipa', 'cipka', 'cipie', 'cipy', 'gówn*', 'srać', 'sraka',
            'dziwk*', 'dupek', 'dupku',
            // Wyzwiska.
            'debil*', 'kretyn*', 'idiot*', 'imbecyl*', 'palant', 'pajac', 'bęcwał',
            'dzban', 'frajer*', 'cwel*', 'szmato', 'menda', 'gnida', 'kanalia', 'bydlak*',
            // Mowa nienawiści.
            'pedale', 'pedalsk*', 'pedalstw*', 'ciota', 'gejuch*', 'lesba', 'czarnuch*',
            'ciapat*', 'brudas*', 'kacap*', 'żydku', 'banderowiec',
            // Groźby i nawoływanie do samookaleczeń.
            'zabiję cię', 'zabij się', 'zdychaj', 'zdechnij', 'zdechnijcie', 'powieś się',
            'strzel sobie w łeb', 'pal w łeb',
            // Angielskie.
            'fuck*', 'motherfuck*', 'bitch*', 'shit', 'bullshit', 'asshole*', 'bastard',
            'cunt*', 'nigger*', 'nigga*', 'retard*', 'faggot*', 'kys',
        ];
    }
}
