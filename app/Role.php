<?php

namespace App;

use Illuminate\Support\Arr;

enum Role: string
{
    case ADMINISTRATOR = 'administrator';
    case USER = 'user';

    /**
     * @return array<int, string>
     */
    public static function all(): array
    {
        return Arr::pluck(self::cases(), 'value');
    }
}
