<?php

// This file was generated by liblab | https://liblab.com/

namespace Dodopayments\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class CreateCustomerPortalSessionResponse
{
    #[SerializedName('link')]
    public string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }
}
