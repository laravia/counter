<?php

namespace Laravia\Counter\App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravia\Counter\App\Counter;
use Laravia\Heart\App\Laravia;
use Laravia\Heart\App\Traits\ServiceProviderTrait;

class CounterServiceProvider extends ServiceProvider
{
    use ServiceProviderTrait;

    protected $name = "counter";


    public function increaseBackendCounterAfterLogin()
    {
        if (Laravia::isInitialBackendCall()) {
            Counter::increase('backend');
        }
    }

    public function boot(): void
    {
        $this->defaultBootMethod();
        $this->increaseBackendCounterAfterLogin();
    }
}
