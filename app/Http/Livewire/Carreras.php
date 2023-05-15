<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Carrera;

// importar storage para poder subir imagenes
use Illuminate\Support\Facades\Storage;
// importar request para poder subir imagenes
// importar file para poder subir imagenes
use Illuminate\Http\File;
// importar el modelo facultad para poder usarlo en el select
use App\Models\Facultade;


class Carreras extends Component
{
    use WithPagination;
	use WithFileUploads;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $shortname, $status, $logo, $description, $color1, $color2, $color3, $facultad, $periodos;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.carreras.view', [
            'carreras' => Carrera::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('shortname', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
						->orWhere('logo', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('color1', 'LIKE', $keyWord)
						->orWhere('color2', 'LIKE', $keyWord)
						->orWhere('color3', 'LIKE', $keyWord)
						->orWhere('facultad', 'LIKE', $keyWord)
						->paginate(10),
			'facultades' => Facultade::all()
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
		$this->status = null;
		$this->logo = null;
		$this->description = null;
		$this->periodos = null;
		$this->color1 = null;
		$this->color2 = null;
		$this->color3 = null;
		$this->facultad = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'shortname' => 'required',
		'status' => 'required',
		'logo' => 'required',
		'description' => 'required',
		'periodos' => 'required',
		'color1' => 'required',
		'color2' => 'required',
		'color3' => 'required',
		'facultad' => 'required',
        ]);

		// subir imagen
		 $image = $this->logo->store('public/imagenes');
		 $url = Storage::url($image);
		// fin subir imagen
		
        Carrera::create([ 
			'name' => $this-> name,
			'shortname' => $this-> shortname,
			'status' => $this-> status,
			'logo' => $url,
			'description' => $this-> description,
			'periodos' => $this->periodos,
			'color1' => $this-> color1,
			'color2' => $this-> color2,
			'color3' => $this-> color3,
			'facultad' => $this-> facultad
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Carrera Successfully created.');
    }

    public function edit($id)
    {
        $record = Carrera::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->shortname = $record-> shortname;
		$this->status = $record-> status;
		$this->logo = $record-> logo;
		$this->description = $record-> description;
		$this->color1 = $record-> color1;
		$this->color2 = $record-> color2;
		$this->color3 = $record-> color3;
		$this->facultad = $record-> facultad;
		$this->periodos = $record-> periodos;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'shortname' => 'required',
		'status' => 'required',
		'logo' => 'required',
		'description' => 'required',
		'periodos' => 'required',
		'color1' => 'required',
		'color2' => 'required',
		'color3' => 'required',
		'facultad' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Carrera::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'shortname' => $this-> shortname,
			'status' => $this-> status,
			'logo' => $this-> logo,
			'description' => $this-> description,
			'periodos' => $this->periodos,
			'color1' => $this-> color1,
			'color2' => $this-> color2,
			'color3' => $this-> color3,
			'facultad' => $this-> facultad
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Carrera Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Carrera::find($id);
            $image_path = $record->logo;
       		$image_path = str_replace("storage", "public", $image_path);
        	Storage::delete($image_path); 
			$record->delete();
        }
		
		session()->flash('message', 'Carrera Successfully deleted.');

    }

	public function getFacultades()
	{
		return Facultade::all();
	}
}
