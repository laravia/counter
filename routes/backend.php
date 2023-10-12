<?php

use Illuminate\Support\Facades\Route;
use Laravia\Counter\App\Orchid\Screens\Counter;
use Tabuna\Breadcrumbs\Trail;

$prefix = config('platform.prefix');

Route::middleware(['web', 'auth', 'platform'])->group(function () use ($prefix) {

    Route::screen($prefix . '/counter', Counter::class)
        ->name('laravia.counter')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push('Counter');
        });
});
