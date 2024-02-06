<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class OpportunityReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
