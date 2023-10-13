<?php

use Laravia\Counter\App\Orchid\Screens\Counter;

$config['counter']['links'] = [
    [
        'name' => 'Counter',
        'icon' => 'bs.bar-chart',
        'route' => 'laravia.counter',
        'sort' => 1000
    ]
];

$config['counter']['dashboard']['metrics'] = [
    'counterBackend' => ['sort' => 100, 'value' => data_get((new Counter())->query(), 'metrics.countersBackend.all'), 'title' => 'Counter Backend'],
];
