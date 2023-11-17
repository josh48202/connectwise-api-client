<?php

namespace Wjbecker\ConnectwiseApiClient\Endpoints;

use Wjbecker\ConnectwiseApiClient\Resources\OnHandSerialNumber;

trait OnHandSerialNumberses
{
    public function onHandSerialNumbers()
    {
        return $this->transformCollection(
            $this->get("procurement/onhandserialnumbers"), OnHandSerialNumber::class
        );
    }
}
