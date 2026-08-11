<?php

declare(strict_types=1);

namespace Zitro\Currency\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zitro\Currency\Currency
 */
class Currency extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Zitro\Currency\Currency::class;
    }
}
