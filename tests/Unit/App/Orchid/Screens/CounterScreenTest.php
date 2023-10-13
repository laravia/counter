<?php

namespace Laravia\Counter\Tests\Unit\App\Orchid\Screens;

use Laravia\Counter\App\Orchid\Screens\CounterScreen;
use Laravia\Heart\App\Classes\TestCase;
use Laravia\Heart\App\Classes\TestScreenCaseTrait;

class CounterScreenTest extends TestCase
{

    use TestScreenCaseTrait;
    public function getScreenTestClass()
    {
        return new CounterScreen();
    }

}
