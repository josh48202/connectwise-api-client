<?php

namespace Wjbecker\ConnectwiseApiClient\API\Procurement;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\ProductsItem;

class ProductsItems extends ConnectWise
{
    protected string $model = ProductsItem::class;

    public function create($payload)
    {
        return $this->request('POST', 'procurement/products', $payload);
    }
}
