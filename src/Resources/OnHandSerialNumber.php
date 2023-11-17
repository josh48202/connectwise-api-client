<?php

namespace Wjbecker\ConnectwiseApiClient\Resources;

class OnHandSerialNumber extends Resource
{
    /**
     * @var Int
     */
    public $id;

    /**
     * @var String
     */
    public $serial;

    public $catalogItem;

    public function inStock()
    {
        dd($this);
    }
}
