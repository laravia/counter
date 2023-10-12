<?php

namespace Laravia\Counter\App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravia\Heart\App\Traits\ServiceProviderTrait;

class CounterServiceProvider extends ServiceProvider
{
    use ServiceProviderTrait;

    protected $name = "counter";

    public function boot(): void
    {
        $this->defaultBootMethod();
    }
}
