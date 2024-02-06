<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class ContactReference extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
