<?php

namespace App\Model;

class Khipu
{
    private ?string $method = "khipu";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}