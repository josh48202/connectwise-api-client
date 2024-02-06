<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Procurement;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class WarehouseBinReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
