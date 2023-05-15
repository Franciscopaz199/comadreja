<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Carrera</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="name"></label>
                <input wire:model="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="shortname"></label>
                <input wire:model="shortname" type="text" class="form-control" id="shortname" placeholder="Shortname">@error('shortname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="status"></label>
                <input wire:model="status" type="text" class="form-control" id="status" placeholder="Status">@error('status') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="logo"></label>
                <input wire:model="logo" type="text" class="form-control" id="logo" placeholder="Logo">@error('logo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description"></label>
                <input wire:model="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="periodos">Periodos</label>
                <input wire:model="periodos" type="number" class="form-control" id="periodos" placeholder="Periodos">@error('periodos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color1"></label>
                <input wire:model="color1" type="text" class="form-control" id="color1" placeholder="Color1">@error('color1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color2"></label>
                <input wire:model="color2" type="text" class="form-control" id="color2" placeholder="Color2">@error('color2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="color3"></label>
                <input wire:model="color3" type="text" class="form-control" id="color3" placeholder="Color3">@error('color3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="facultad"></label>
                <input wire:model="facultad" type="text" class="form-control" id="facultad" placeholder="Facultad">@error('facultad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
