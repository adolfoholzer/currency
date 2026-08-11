<?php

declare(strict_types=1);

use Zitro\Currency\Currency;

it('resolves the singleton', function () {
    expect(app(Currency::class))->toBeInstanceOf(Currency::class);
});

it('returns the same instance from the container', function () {
    expect(app(Currency::class))->toBe(app(Currency::class));
});

it('merges the package config', function () {
    expect(config('currency.placeholder'))->toBe('default');
})->skip();
