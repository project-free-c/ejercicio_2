<?php

namespace App\Model;

class MercadoPago
{
    private ?string $method = "mercadoPago";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}
