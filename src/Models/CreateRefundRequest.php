<?php

// This file was generated by liblab | https://liblab.com/

namespace Dodopayments\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class CreateRefundRequest
{
    /**
     * The unique identifier of the payment to be refunded.
     */
    #[SerializedName('payment_id')]
    public string $paymentId;

    /**
     * The reason for the refund, if any. Maximum length is 3000 characters. Optional.
     */
    #[SerializedName('reason')]
    public ?string $reason;

    public function __construct(string $paymentId, ?string $reason = null)
    {
        $this->paymentId = $paymentId;
        $this->reason = $reason;
    }
}
