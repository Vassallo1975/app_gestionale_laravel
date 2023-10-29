<?php

namespace App\ValueObjects;

use Illuminate\Support\Collection;

class Menu 
{
    public function __construct(public ?Collection $menuItems = null)
    {
        $this->menuItems = $this->menuItems ?: collect();
    } 

    public function addItem (MenuItem $item):static
    {
        $this->menuItems->push($item);
        return $this;
    }
}