<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{

    public $title = 'Kaddah Cleaning Equipment';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null)
    {
        //
        $this->title = $title ? "$title | {$this->title}" : $this->title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
