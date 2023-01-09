<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Unihascarrera;

// traer el modelo universidad
use App\Models\Uni;
use App\Models\Carrera;


class Unihascarreras extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $university_id, $carrera_id;
    public $Uni, $Listcarreras;
    public $updateMode = false;
    public $Allcarreras = [];

    public function mount()
    {
        $this->Allcarreras = Carrera::all();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.unihascarreras.view', [
            'unihascarreras' => Uni::latest()
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->updateMode = false;
    }
	
   

    public function edit($id)
    {
        $record = Uni::findOrFail($id);

        $this->Uni = $record;
        $this->Listcarreras = $record->carreras;
        $this->updateMode = true;
        
    }

    public function eliminar($id)
    {
        // eliminar la carrera seleccionada de la universidad
        $this->Uni->carreras()->detach($id);

        //actualizar la lista de carreras
        $this->Listcarreras = $this->Uni->carreras;
        $this->Allcarreras = Carrera::all();
    }


    public function guardar()
    {
        // guardar la carrera seleccionada
        $this->validate([
            'carrera_id' => 'required',
        ]);
        $this->Uni->carreras()->attach($this->carrera_id);
        // actualizar la lista de carreras
        $this->Listcarreras = $this->Uni->carreras;
        $this->updateMode = false;
        $this->mount();
    }

}
