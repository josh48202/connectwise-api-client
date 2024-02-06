<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Procurement;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class Metadata extends BaseModel
{
    protected $casts = [
        'lastUpdated' => Carbon::class,
        'updatedBy' => 'string',
        'dateReceived' => Carbon::class,
    ];
}
