<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Sales;

use Carbon\Carbon;
use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

/**
 * @property integer $id
 */
class Opportunity extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'billToCompany' => Reference::class,
        'billToContact' => Reference::class,
        'billToSite' => Reference::class,
        'billingTerms' => Reference::class,
        'businessUnitId' => 'integer',
        'campaign' => Reference::class,
        'closedBy' => Reference::class,
        'closedDate' => Carbon::class,
        'company' => Reference::class,
        'companyLocationId' => 'integer',
        'contact' => Reference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateBecameLead' => Carbon::class,
        'expectedCloseDate' => Carbon::class,
        'id' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
        'notes' => 'string',
        'pipelineChangeDate' => Carbon::class,
        'primarySalesRep' => Reference::class,
        'priority' => Reference::class,
        'probability' => Reference::class,
        'rating' => Reference::class,
        'secondarySalesRep' => Reference::class,
        'shipToCompany' => Reference::class,
        'shipToContact' => Reference::class,
        'shipToSite' => Reference::class,
        'site' => Reference::class,
        'source' => 'string',
        'stage' => Reference::class,
        'status' => Reference::class,
        'taxCode' => Reference::class,
        'technicalContact' => Reference::class,
        'totalSalesTax' => 'float',
        'type' => Reference::class,
    ];
}
