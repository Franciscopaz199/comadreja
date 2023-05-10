<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Infoplan extends Component
{
    public $clasesperiodo = [];

    public function render()
    {
        return view('livewire.infoplan');
    }
}
