<?php

namespace Wjbecker\ConnectwiseApiClient\API\Procurement;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Procurement\OnHandSerialNumber;

class OnHandSerialNumberses extends ConnectWise
{
    protected string $model = OnHandSerialNumber::class;

    public function count()
    {
        return $this->get('procurement/onhandserialnumbers/count');
    }

    public function list()
    {
        return $this->request('GET', 'procurement/onhandserialnumbers');
    }

    public function find($id)
    {
        return $this->request('GET', 'procurement/onhandserialnumbers/'.$id);
    }

    public function bySerial($serial)
    {
        return $this->withOptions(['conditions' => 'serial like "*'.$serial.'"'])->request('GET', 'procurement/onhandserialnumbers');
    }

    public function isInvoiced($serial): bool
    {
        return count($this->bySerial($serial)) !== 1;
    }
}
