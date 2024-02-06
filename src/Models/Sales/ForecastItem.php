<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class ForecastItem extends BaseModel
{
    protected $casts = [
        'id' => 'integer',
        'forecastDescription' => 'string',
        'quantity' => 'integer',
        'catalogItem' => CatalogItemReference::class,
        'productDescription' => 'string',
        '_info' => Metadata::class,
    ];
}
