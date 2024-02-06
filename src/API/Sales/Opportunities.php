<?php

namespace Wjbecker\ConnectwiseApiClient\API\Sales;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\CatalogItemReference;

class Opportunities extends ConnectWise
{
    protected string $model = CatalogItemReference::class;

    public function find($id)
    {
        return $this->request('GET', 'sales/opportunities/'.$id);
    }

    public function create($payload)
    {
        return $this->request('POST', 'sales/opportunities', $payload);
    }
}
