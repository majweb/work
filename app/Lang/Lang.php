<?php

namespace App\Lang;

enum Lang: string
{
    case PL = 'pl';
    case EN = 'en';

    public function label(): string
    {
        return match($this) {
            self::EN => 'Angielski',
            self::PL => 'Polski',
        };
    }
}
