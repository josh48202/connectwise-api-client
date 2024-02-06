<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class Forecast extends BaseModel
{
    protected $casts = [
        'id' => 'integer',
        '_info' => Metadata::class,
        'forecastItems' => 'array',
    ];
}
