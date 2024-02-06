<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class CompanyReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
