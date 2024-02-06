<?php

namespace Wjbecker\ConnectwiseApiClient\API\Sales;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Sales\ForecastItem;

class OpportunityForecastItems extends ConnectWise
{
    protected string $model = ForecastItem::class;

    public function create($id, $payload)
    {
        return $this->request('POST', 'sales/opportunities/'.$id.'/forecast/'.$id, $payload);
    }
}
