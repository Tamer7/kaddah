<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuDropdown extends Component
{
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            'Home' => route('home.index'),
            'Products' => route('products.index'),
            'Brands' => route('brands.index'),
            'Blogs' => route('blogs.index'),
            'Events' => route('events.index'),
            'Contact' => route('contact.index'),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-dropdown', [
            'items' => $this->items,
        ]);
    }
}
