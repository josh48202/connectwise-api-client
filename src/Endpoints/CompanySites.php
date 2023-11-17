<?php

namespace Wjbecker\ConnectwiseApiClient\Endpoints;

use Wjbecker\ConnectwiseApiClient\Resources\OnHandSerialNumber;

trait CompanySites
{
    private string $base_uri = 'company/companies/{parentId}/sites';

    public function companySites($parentId)
    {
        return $this->transformCollection(
            $this->get("company/companies/$parentId/sites"), OnHandSerialNumber::class
        );
    }
}
