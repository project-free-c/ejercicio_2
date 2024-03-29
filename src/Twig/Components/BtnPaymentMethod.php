<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class BtnPaymentMethod
{
    public string $children;
    public string $href;
    use DefaultActionTrait;
}
