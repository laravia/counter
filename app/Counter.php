<?php

namespace Laravia\Counter\App;

use Laravia\Counter\App\Models\Counter as ModelsCounter;
use Laravia\Counter\App\Orchid\Screens\CounterScreen;

class Counter
{

    public static function increase($key)
    {
        $ip = request()->ip();
        $referer = request()->headers->get('referer');
        $user_agent = request()->headers->get('user-agent');
        $url = request()->url();
        $method = request()->method();

        return ModelsCounter::create([
            'key' => $key,
            'ip' => $ip,
            'referer' => $referer,
            'user_agent' => $user_agent,
            'url' => $url,
            'method' => $method,
        ]);
    }

    public static function getDashboardMetrics($what)
    {
        try {
            switch ($what) {
                case 'counterBackend':
                    return data_get((new CounterScreen())->query(), 'metrics.countersBackend.all');
                    break;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
}
