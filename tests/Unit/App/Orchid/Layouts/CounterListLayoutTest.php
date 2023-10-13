<?php

namespace Laravia\Counter\Tests\Unit\App\Orchid\Layouts;

use Laravia\Counter\App\Orchid\Layouts\CounterListLayout;
use Laravia\Heart\App\Classes\TestCase;

class CounterListLayoutTest extends TestCase
{

    public $class = 'Laravia\Counter\App\Orchid\Layouts\CounterListLayout';

    public function testInitClass()
    {
        $this->assertClassExist($this->class);
    }

    public function testColumnsExist()
    {
        $this->assertMethodInClassExists('columns', CounterListLayout::class);
    }
    public function testColumns()
    {
        $this->assertIsArray((new CounterListLayout)->columns());
    }
}
