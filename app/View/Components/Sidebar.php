<?php

namespace App\View\Components;

use App\ValueObjects\Menu;
use App\ValueObjects\MenuItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public string $title;
    protected Menu $menu;
    /**
     * Create a new component instance.
     */
    public function __construct($title='')
    {
        $this->title=$title;
        $this->initMenu();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar')->with([
            'menu' => $this->menu
        ]);
    }

    private function initMenu(){
        $this->menu=new Menu();
        $this->menu->addItem(new MenuItem(
            label: 'Prodotti', 
            route:route(name: 'products')
            ))->addItem(new MenuItem(
                label: 'Ordini', 
                route:route(name: 'orders')
            ))->addItem(new MenuItem(
                label: 'Clienti', 
                route:route(name: 'customers')
            ));
    }
}
