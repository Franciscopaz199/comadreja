<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jefesdepartamento;
// importamos el modelo departamento para poder usarlo en el select
use App\Models\Departamento;
use App\Models\Uni;
use App\Models\User;

class Jefesdepartamentos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $depto_id, $uni_id, $accountnumber;
    public $updateMode = false;
    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.jefesdepartamentos.view', [
            'jefesdepartamentos' => Jefesdepartamento::latest()
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('depto_id', 'LIKE', $keyWord)
						->orWhere('uni_id', 'LIKE', $keyWord)
						->orWhere('accountnumber', 'LIKE', $keyWord)
						->paginate(10),
                        'departamentos' => Departamento::all(),
                        'universidades' => Uni::all(),
                        'users' => User::all(),
                    ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->user_id = null;
		$this->depto_id = null;
		$this->uni_id = null;
		$this->accountnumber = null;
    }

    public function store()
    {
      
        Jefesdepartamento::create([ 
			'user_id' => $this-> user_id,
			'depto_id' => $this-> depto_id,
			'uni_id' => $this-> uni_id,
			'accountnumber' => $this-> accountnumber
        ]);
        
        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Jefesdepartamento Successfully created.');
    }

    public function edit($id)
    {
        $record = Jefesdepartamento::findOrFail($id);
        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->depto_id = $record-> depto_id;
		$this->uni_id = $record-> uni_id;
		$this->accountnumber = $record-> accountnumber;
    }

    public function update()
    {
        

        if ($this->selected_id) {
			$record = Jefesdepartamento::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'depto_id' => $this-> depto_id,
			'uni_id' => $this-> uni_id,
			'accountnumber' => $this-> accountnumber
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Jefesdepartamento Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Jefesdepartamento::where('id', $id)->delete();
        }
    }
}