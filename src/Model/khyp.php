<?php

namespace App\Model;

class  Khyp
{
    private ?string $method = "khyp";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}