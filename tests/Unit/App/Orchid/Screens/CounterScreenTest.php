<?php

namespace Laravia\Counter\Tests\Unit\App;

use Laravia\Counter\App\Orchid\Screens\Counter;
use Laravia\Heart\App\Classes\TestCase;
use Laravia\Heart\App\Classes\TestScreenCaseTrait;

class CounterScreenTest extends TestCase
{

    use TestScreenCaseTrait;
    public function getScreenTestClass()
    {
        return new Counter();
    }

}
