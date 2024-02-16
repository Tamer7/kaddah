<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Layout extends Component
{

    public $title = 'Kaddah Cleaning Equipment';

    public $segment_1 = 'product';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null)
    {
        //
        $this->title = $title ? "$title | {$this->title}" : $this->title;

        $this->segment_1 = Request::segment(1);
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
