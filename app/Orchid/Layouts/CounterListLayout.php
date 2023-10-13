<?php

namespace Laravia\Counter\App\Orchid\Layouts;

use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;

class CounterListLayout extends Table
{
    public $target = 'counters';

    public function columns(): array
    {
        return [
            TD::make('created_at', 'Created'),
            TD::make('url', 'Url'),
            TD::make('ip', 'Ip'),
            TD::make('method', 'Method'),
            TD::make('referer', 'Referer'),
            TD::make('user_agent', 'User agent'),
        ];
    }
}
