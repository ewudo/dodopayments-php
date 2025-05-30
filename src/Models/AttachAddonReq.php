<?php

// This file was generated by liblab | https://liblab.com/

namespace Dodopayments\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class AttachAddonReq
{
    #[SerializedName('addon_id')]
    public string $addonId;

    #[SerializedName('quantity')]
    public int $quantity;

    public function __construct(string $addonId, int $quantity)
    {
        $this->addonId = $addonId;
        $this->quantity = $quantity;
    }
}
