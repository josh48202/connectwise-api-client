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
        'price' => 'integer',
        'cost' => 'integer',
        'discount' => 'integer',
        'agreementAmount' => 'integer',
        'priceMethod' => 'string',
        'billableOption' => 'string',
        'customerDescription' => 'string',
        'opportunity' => OpportunityReference::class,
        'serialNumbers' => 'array',
        '_info' => Metadata::class,
    ];
}
