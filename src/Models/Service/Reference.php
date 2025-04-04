<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Service;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class Reference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
