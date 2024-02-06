<?php

namespace Wjbecker\ConnectwiseApiClient\Models\Procurement;

use Wjbecker\ConnectwiseApiClient\Models\BaseModel;

class OnHandSerialNumber extends BaseModel
{
    protected $casts = [
        '_info' => Metadata::class,
        'catalogItem' => ProductsItem::class,
        'id' => 'integer',
        'serial' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class,
    ];
}
