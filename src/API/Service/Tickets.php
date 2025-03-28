<?php

namespace Wjbecker\ConnectwiseApiClient\API\Service;

use Wjbecker\ConnectwiseApiClient\ConnectWise;
use Wjbecker\ConnectwiseApiClient\Models\Service\Ticket;

class Tickets extends ConnectWise
{
    protected string $model = Ticket::class;

    public function list()
    {
        return $this->request('GET', 'service/tickets');
    }

    public function find($id)
    {
        return $this->request('GET', 'service/tickets/'.$id);
    }
}
