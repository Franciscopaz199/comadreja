<div class="table-responsive">
   <table class="table table-bordered table-sm">
      <thead class="thead">
         <tr> 
            <td>N#</td>
            <td>Nombre</td>
            <td>Depto</td>
            <td>Participantes</td>
            <td>Accion</td>
         </tr>
      </thead>
      <tbody>
         @foreach($clases as $clase)
         <tr>
            <td>{{$loop->iteration}}</td>
                    <td>{{$clase->name}}</td>
                    <td>{{$clase->departa->name}}</td>
                    <td>{{$clase->students->where('uni',auth()->user()->jefe->uni_id)->count()}}</td>
                    <td>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal" wire:click="detalles({{$clase->id}})">
                           Detalles
                     </button>
                  </td>
         @endforeach
      </tbody>
   </table>				
   <!-- Modal fghfghgfh-->
  
</div>