<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Document;

class Documents extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.documents.view', [
            'documents' => Document::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->description = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
        ]);

        Document::create([ 
			'name' => $this-> name,
			'description' => $this-> description
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Document Successfully created.');
    }

    public function edit($id)
    {
        $record = Document::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->description = $record-> description;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Document::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'description' => $this-> description
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Document Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Document::where('id', $id)->delete();
        }
    }
}