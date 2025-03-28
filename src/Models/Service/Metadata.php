<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Service;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class Metadata extends BaseModel
{
    protected $casts = [
        'lastUpdated' => Carbon::class,
        'dateEntered' => Carbon::class,
    ];
}
