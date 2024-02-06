<?php

namespace App\Model;

class WebPay
{
    private ?string $method = "webPay";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}