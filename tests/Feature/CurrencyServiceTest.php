<?php

declare(strict_types=1);

use Zitro\Currency\Currency;
use Zitro\Currency\Facades\Currency as ZitroCurrency;

// uses(\Tests\TestCase::class);

test('corre tests de CurrencyServiceTest', function () {
    expect(true)->toBeTrue();
});

test('devuelve sólo las monedas habilitadas en la configuración local', function () {
    config(['currency.enabled' => ['UYU']]);

    $service = app(Currency::class);
    $habilitadas = $service->getEnabled();

    expect($habilitadas)->toHaveCount(1)
        ->and($habilitadas)->toHaveKey('UYU');
});

test('el facade responde correctamente usando el contenedor de la app', function () {
    config(['currency.enabled' => ['UYU', 'USD']]);

    expect(ZitroCurrency::isEnabled('UYU'))->toBeTrue()
        ->and(ZitroCurrency::isEnabled('ARS'))->toBeFalse();
});