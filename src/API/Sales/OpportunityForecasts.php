<?php

namespace Wjbecker\ConnectwiseApiClient\API\Sales;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\CatalogItemReference;

class OpportunityForecasts extends ConnectWise
{
    protected ?string $model = CatalogItemReference::class;

    public function create($id, $payload)
    {
        return $this->request('POST', 'sales/opportunities/'.$id.'/forecast', $payload);
    }
}
