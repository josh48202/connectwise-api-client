<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class Metadata extends BaseModel
{
    protected $casts = [
        'dateEntered' => Carbon::class,
        'lastUpdated' => Carbon::class,
    ];
}
