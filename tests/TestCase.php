<?php

declare(strict_types=1);

namespace Zitro\Currency\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zitro\Currency\CurrencyServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CurrencyServiceProvider::class,
        ];
    }
}
