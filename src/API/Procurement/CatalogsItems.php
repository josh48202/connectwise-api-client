<?php

namespace Wjbecker\ConnectwiseApiClient\API\Procurement;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\CatalogsItem;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\ProductsItem;

class CatalogsItems extends ConnectWise
{
    protected string $model = CatalogsItem::class;

    public function list()
    {
        return $this->request('GET', 'procurement/catalog');
    }
}
