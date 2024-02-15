<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Procurement;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;
use Wjbecker\ConnectwiseApiClient\Models\Sales\OpportunityReference;

class CatalogsItem extends BaseModel
{
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'description' => 'string',
        'price' => 'float',
        'cost' => 'float',
        '_info' => Metadata::class,
    ];
}
