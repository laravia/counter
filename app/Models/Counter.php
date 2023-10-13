<?php

namespace Laravia\Counter\App\Models;

use Laravia\Heart\App\Models\Model;
use Orchid\Screen\AsSource;

class Counter extends Model
{
    use AsSource;
    protected $fillable = [
        'key',
        'ip',
        'referer',
        'user_agent',
        'url',
        'method',
    ];

}
