<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use App\Models\Clase;

class Carreradash extends Component
{
  
    public $carrera;

    public $codeclass;
    public $requisitoclass;
    
    public function mount()
    {
        foreach ($this->carrera->clases as $clase) {
            $clase->requisito = Clase::find($clase->pivot->requisito_id);
        }
    }


    public function render()
    {
        return view('livewire.carrerasdashboard.view');
    }

    public function agregar()
    {
        $this->validate([
            'codeclass' => 'required',
            'requisitoclass' => 'required',
        ]);

        $clase = Clase::where('codigo', $this->codeclass)->first();
        $requisito = Clase::where('codigo', $this->requisitoclass)->first();

        // agregar la relacion de muchos a muchos entre carrera y clases
        $this->carrera->clases()->attach($clase->id, ['requisito_id' => $requisito->id]);
    }

    public function eliminar($id)
    {
        // eliminar la relacion de muchos a muchos entre carrera y clases

        $this->carrera->clases()->detach($id);
        $this->mount();
    }
        
   
}
