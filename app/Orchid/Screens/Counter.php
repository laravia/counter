<?php

namespace Laravia\Counter\App\Orchid\Screens;

use Laravia\Counter\App\Models\Counter as ModelsCounter;
use Laravia\Counter\App\Orchid\Layouts\CounterListLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class Counter extends Screen
{

    public function query(): iterable
    {
        return [
            'metrics' => [
                'countersBackend' => ['all' => ModelsCounter::where('key', '=', 'backend')->count()],
                'countersFrontend' => ['all' => ModelsCounter::where('key', '=', 'frontend')->count()],
            ],
        ];
    }

    public function name(): ?string
    {
        return 'Counter Screen';
    }

    public function description(): ?string
    {
        return 'Counters of Laravia';
    }

    public function commandBar(): iterable
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'Backend'    => 'metrics.countersBackend.all',
                'Frontend'    => 'metrics.countersFrontend.all',
            ]),

        ];
    }
}
