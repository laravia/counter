<?php

namespace Laravia\Counter\App\Models;

use Laravia\Heart\App\Models\Model;

class Counter extends Model
{

    protected $fillable = [
        'key',
        'ip',
        'referer',
        'user_agent',
        'url',
        'method',
    ];

}
