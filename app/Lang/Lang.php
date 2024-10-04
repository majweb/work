<?php

namespace App\Lang;

enum Lang: string
{
    case PL = 'pl';
    case EN = 'en';




    public function label(): string
    {

        $array = [
            'pl'=>[
                'pl'=>'Polski',
                'en'=>'Angielski',
            ],
            'en'=>[
                'pl'=>'Polish',
                'en'=>'English',
            ]
        ];

        return match($this) {
            self::EN => $array[app()->getLocale()]['en'],
            self::PL => $array[app()->getLocale()]['pl'],
        };
    }
}
