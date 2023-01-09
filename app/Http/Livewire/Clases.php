<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clase;
// importamos el modelo departamento para poder usarlo en el select
use App\Models\Departamento;


class Clases extends Component
{
    use WithPagination;
    
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $departamento, $codigo, $UV, $dificultad;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clases.view', [
            'clases' => Clase::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('departamento', 'LIKE', $keyWord)
						->orWhere('codigo', 'LIKE', $keyWord)
						->orWhere('UV', 'LIKE', $keyWord)
						->orWhere('dificultad', 'LIKE', $keyWord)
						->paginate(10),
       'departamentos' => Departamento::all()
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->description = null;
		$this->departamento = null;
		$this->codigo = null;
		$this->UV = null;
		$this->dificultad = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'departamento' => 'required',
		'codigo' => 'required',
		'UV' => 'required',
        ]);

        Clase::create([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'departamento' => $this-> departamento,
			'codigo' => $this-> codigo,
			'UV' => $this-> UV,
			'dificultad' => $this-> dificultad
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Clase Successfully created.');
    }

    public function edit($id)
    {
        $record = Clase::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->description = $record-> description;
		$this->departamento = $record-> departamento;
		$this->codigo = $record-> codigo;
		$this->UV = $record-> UV;
		$this->dificultad = $record-> dificultad;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'departamento' => 'required',
		'codigo' => 'required',
		'UV' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Clase::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'departamento' => $this-> departamento,
			'codigo' => $this-> codigo,
			'UV' => $this-> UV,
			'dificultad' => $this-> dificultad
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Clase Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Clase::where('id', $id);
            $record->delete();
        }
    }
}
