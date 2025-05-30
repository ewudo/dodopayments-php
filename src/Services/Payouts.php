<?php

// This file was generated by liblab | https://liblab.com/

namespace Dodopayments\Services;

use Dodopayments\Utils\Serializer;
use Dodopayments\Models;

class Payouts extends BaseService
{
    public function listPayouts(int $pageSize = null, int $pageNumber = null): Models\GetPayoutsResponseList
    {
        $data = $this->sendRequest('get', '/payouts', [
            'query' => [
                'page_size' => $pageSize,
                'page_number' => $pageNumber,
            ],
        ]);

        return Serializer::deserialize($data, Models\GetPayoutsResponseList::class);
    }
}
