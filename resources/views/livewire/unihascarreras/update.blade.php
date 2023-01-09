<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Agregar o quitar carreras a la universidad:
                @isset($Uni)
                    {{ $Uni->shortname }}
                @endisset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form >
                    <select wire:model="carrera_id" class="form-control" required>
                        <option value="">Seleccione una carrera</option>
                      
                            @foreach($Allcarreras  as $Carrera)
                                <option value="{{ $Carrera->id }}">{{ $Carrera->name }}</option>
                            @endforeach
                      
                    </select>
                    <button class="btn btn-primary" wire:click.prevent="guardar()" data-dismiss="modal">Agregar</button>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Carrera</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                       @isset($Listcarreras)
                             @foreach($Listcarreras as $Carrera)
                                <tr>
                                    <td>{{ $Carrera->name }}</td>
                                    <td><button class="btn btn-danger" wire:click.prevent="eliminar({{ $Carrera->id }})" data-dismiss="modal">Eliminar</button></td>
                                </tr>
                             @endforeach
                       @endisset
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
       </div>
    </div>
</div>
