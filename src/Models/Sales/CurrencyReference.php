<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class CurrencyReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'isoCode' => 'string',
        'name' => 'string',
        'symbol' => 'string',
    ];
}
