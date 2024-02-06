<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class CatalogItemReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'serializedFlag' => 'boolean'
    ];
}
