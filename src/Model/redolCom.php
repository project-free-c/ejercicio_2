<?php

namespace App\Model;

class RedolCom
{
    private ?string $method = "redolCom";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}