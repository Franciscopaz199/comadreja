<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Facultade;

class Facultades extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $shortname;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.facultades.view', [
            'facultades' => Facultade::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('shortname', 'LIKE', $keyWord)
						->paginate(10),
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
		$this->shortname = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'shortname' => 'required',
        ]);

        Facultade::create([ 
			'name' => $this-> name,
			'shortname' => $this-> shortname
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Facultade Successfully created.');
    }

    public function edit($id)
    {
        $record = Facultade::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->shortname = $record-> shortname;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'shortname' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Facultade::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'shortname' => $this-> shortname
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Facultade Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Facultade::where('id', $id);
            $record->delete();
        }
    }
}
