<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Procurement;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;
use Wjbecker\ConnectwiseApiClient\Models\Sales\OpportunityReference;

class ProductsItem extends BaseModel
{
    protected $casts = [
        'id' => 'integer',
        'catalogItem' => CatalogItemReference::class,
        'description' => 'string',
        'sequenceNumber' => 'integer',
        'quantity' => 'integer',
        'price' => 'float',
        'cost' => 'float',
        'discount' => 'float',
        'agreementAmount' => 'float',
        'priceMethod' => 'string',
        'billableOption' => 'string',
        'customerDescription' => 'string',
        'opportunity' => OpportunityReference::class,
        'serialNumbers' => 'array',
        '_info' => Metadata::class,
    ];
}
