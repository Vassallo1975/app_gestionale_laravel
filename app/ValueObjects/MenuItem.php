<?php

namespace App\ValueObjects;

class MenuItem 
{
    public function __construct(public readonly string $label,
    public readonly string $route)
    {
    }
}