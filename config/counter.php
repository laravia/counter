<?php

use Laravia\Counter\App\Counter;

$config['counter']['links'] = [
    [
        'name' => 'Counter',
        'icon' => 'bs.bar-chart',
        'route' => 'laravia.counter',
        'title' => __('System'),
        'sort' => 1000
    ]
];

$config['counter']['dashboard']['metrics'] = [
    'counterBackend' => ['sort' => 100, 'value' => Counter::getDashboardMetrics('counterBackend'), 'title' => 'Counter Backend'],
];
