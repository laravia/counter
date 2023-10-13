<?php

namespace Laravia\Counter\Tests\Unit\App;

use Laravia\Counter\App\Models\Counter;
use Laravia\Heart\App\Classes\TestCase;

class CounterModelTest extends TestCase
{
    public function testInitClass()
    {
        $this->assertClassExist(Counter::class);
    }

    public function testCreateCounter()
    {
        $ip = $this->faker->ipv4;
        $counter = Counter::create([
            'key' => 'backend',
            'ip' => $ip,
            'referer' => $this->faker->url,
            'user_agent' => $this->faker->userAgent,
            'url' => $this->faker->url,
            'method' => $this->faker->randomElement(['GET', 'POST', 'PUT', 'PATCH', 'DELETE']),
        ]);

        $this->assertEquals($ip, Counter::first()->ip);
        $counter->delete();
    }
}
