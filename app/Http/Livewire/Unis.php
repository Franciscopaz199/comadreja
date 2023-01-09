<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uni;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Unis extends Component
{
    use WithPagination;
    use WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $address, $logo, $status, $shortname;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.unis.view', [
            'unis' => Uni::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('address', 'LIKE', $keyWord)
						->orWhere('logo', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
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
		$this->address = null;
		$this->logo = null;
		$this->status = null;
		$this->shortname = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'address' => 'required',
		'logo' => 'required',
		'status' => 'required',
		'shortname' => 'required',
        ]);

      
        $image = $this->logo->store('public/imagenes');
		$url = Storage::url($image);

        Uni::create([ 
			'name' => $this-> name,
			'address' => $this-> address,
			'logo' => $url, 
			'status' => $this-> status,
			'shortname' => $this-> shortname
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Uni Successfully created.');
    }

    public function edit($id)
    {
        $record = Uni::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->address = $record-> address;
		$this->logo = $record-> logo;
		$this->status = $record-> status;
		$this->shortname = $record-> shortname;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'address' => 'required',
		'logo' => 'required',
		'status' => 'required',
		'shortname' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Uni::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'address' => $this-> address,
			'logo' => $this-> logo,
			'status' => $this-> status,
			'shortname' => $this-> shortname
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Uni Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Uni::Find($id);
            $image_path = $record->logo;
            $image_path = str_replace("storage", "public", $image_path);
            Storage::delete($image_path);
            $record->delete();
        }
    }
}
