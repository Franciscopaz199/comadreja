<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardmoderna extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $footer;
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cardmoderna');
    }
}
