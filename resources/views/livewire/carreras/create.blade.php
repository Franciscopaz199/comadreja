<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Carrera</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form encType="multipart/form-data">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input wire:model="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="shortname">Nombre Corto</label>
                <input wire:model="shortname" type="text" class="form-control" id="shortname" placeholder="Shortname">@error('shortname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input wire:model="status" type="text" class="form-control" id="status" placeholder="Status">@error('status') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input wire:model="logo" type="file" class="form-control" id="logo" placeholder="Logo">@error('logo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input wire:model="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color1">Color1</label>
                <input wire:model="color1" type="text" class="form-control" id="color1" placeholder="Color1">@error('color1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color2">Color2</label>
                <input wire:model="color2" type="text" class="form-control" id="color2" placeholder="Color2">@error('color2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color3">Color3</label>
                <input wire:model="color3" type="text" class="form-control" id="color3" placeholder="Color3">@error('color3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color4">Facultad</label>
                <select wire:model="facultad" class="form-control" id="facultad_id" placeholder="Facultad_id" name="facultad">
                    <option value="">Seleccione una facultad</option>
                    @foreach($facultades as $facultad)
                        <option value="{{ $facultad->id }}">{{ $facultad->name }}</option>
                    @endforeach
                </select>

            </div>
            
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
