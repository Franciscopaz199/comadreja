<div class="contenido">
   
    <div class="card">
        <div class="card-body">
         <h4 class="card-title">
            <p>Editando clases de la carrera: 
                <span class="text-primary">
                   {{$carrera->shortname}}
                </span>
            </p>
        </h4>
        </div>
    </div>
   <div class="contenedor-secciones">
    <div class="left-section">
        <div class="title">
            <h4>Agregar una materia</h4>
        </div>
        <div class="body">
            <div class="formularios" style="border: 1px solid rgb(208, 208, 208); box-sizing:border-box; padding:20px;    ">
                <div class="form-group">
                    <label for="exampleInputEmail1">Codigo</label>
                    <input wire:model ="codeclass" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Requisito</label>
                    <input wire:model ="requisitoclass" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" wire:click="agregar()">Agregar</button>
            </div>
        </div>

    </div>
    <div class="rigth-section">
        <div class="title">
            <h4>Lista de materias</h4>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="thead">
                        <tr>
                            <th>Codigo</th>
                            <th>Requisito</th>
                            <th>Prioridad</th>
                            <th>accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carrera->clases as $materia)
                                <tr class="selectcar">
                                    <td>{{$materia->pivot}}</td>
                                    <td>@isset($materia->requisito->name)
                                        {{$materia->requisito->name}}
                                    @endisset
                                </td>
                                    <td>5</td>
                                    <td>
                                      <form >
                                        <button class="btn btn-danger" wire:click.prevent="eliminar({{ 1 }})">Eliminar</button>
                                      </form>
                                      <h1>hekki</h1>
                                    </td>
                                </tr> 
                        @endforeach
                    </table>


            </div>
        </div>
    </div>
   </div>

</div>