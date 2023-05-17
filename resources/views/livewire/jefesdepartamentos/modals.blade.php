<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Jefesdepartamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
               </button>
            </div>
            
           <div class="modal-body">
				<form>
                    

                    <div class="form-group">
                        <label for="user_id">Jefe de departamento</label>
                        <select wire:model="user_id" type="text" class="form-control" id="user_id" placeholder="User Id"> 
                            <option value="">Seleccione El jefe de departamento</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                        </select>    
                    </div>



                    <div class="form-group">
                        <label for="departamento">departamento</label>
                        <select wire:model="depto_id" name="departamento" id="depto_id" placeholder="Depto Id" class="form-control"> 
                            <option value="">Seleccione un departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                @endforeach
                        </select>    
                    </div>

                    
                    <div class="form-group">
                        <label for="uni_id"></label>
                        <select wire:model="uni_id" type="text" class="form-control" id="uni_id" placeholder="Uni Id">
                            <option value="">Seleccione la universidad</option>
                                @foreach ($universidades as $universidad)
                                    <option value="{{ $universidad->id }}">{{ $universidad->name }}</option>
                                @endforeach
                        </select>    
                    </div>


                    <div class="form-group">
                        <label for="accountnumber"></label>
                        <input wire:model="accountnumber" type="text" class="form-control" id="accountnumber" placeholder="Accountnumber">@error('accountnumber') <span class="error text-danger">{{ $message }}</span> @enderror
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



<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Clase</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                  
                    <div class="form-group">
                        <label for="user_id">Jefe de departamento</label>
                        <select wire:model="user_id" type="text" class="form-control" id="user_id" placeholder="User Id"> 
                            <option value="">Seleccione El jefe de departamento</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                        </select>    
                    </div>



                    <div class="form-group">
                        <label for="departamento">departamento</label>
                        <select wire:model="depto_id" name="departamento" id="depto_id" placeholder="Depto Id" class="form-control"> 
                            <option value="">Seleccione un departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                @endforeach
                        </select>    
                    </div>

                    
                    <div class="form-group">
                        <label for="uni_id"></label>
                        <select wire:model="uni_id" type="text" class="form-control" id="uni_id" placeholder="Uni Id">
                            <option value="">Seleccione la universidad</option>
                                @foreach ($universidades as $universidad)
                                    <option value="{{ $universidad->id }}">{{ $universidad->name }}</option>
                                @endforeach
                        </select>    
                    </div>


                    <div class="form-group">
                        <label for="accountnumber"></label>
                        <input wire:model="accountnumber" type="text" class="form-control" id="accountnumber" placeholder="Accountnumber">@error('accountnumber') <span class="error text-danger">{{ $message }}</span> @enderror
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
