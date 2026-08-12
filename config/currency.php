<?php

declare(strict_types=1);

use Zitro\Currency\Enums\CurrencyType;

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled currencies
    |--------------------------------------------------------------------------
    */
    'enabled' => [
        CurrencyType::PESO_URUGUAYO->value,
        CurrencyType::USD->value,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This currency will be returned by the CurrencyService whenever the
    | default currency is requested.
    |
    */
    'default' => CurrencyType::PESO_URUGUAYO->value,
    
];