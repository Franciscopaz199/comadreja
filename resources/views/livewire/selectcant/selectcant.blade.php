<div>
    <div class="botones-container">
    @for( $i = $clases; $i > ($clases -4) && $i>0 ; $i-- )
        <input type="radio" name="opcion" wire:click="clases1({{$i}})"  id="opcion{{$i}}" class="radio">
        <label for="opcion{{$i}}" class="labelradio">{{$i}} Clases</label>
   @endfor

    </div>
    <div class="container-clases-periodo">
        <table class="table">
            <thead>
        @forelse ($clasesperiodo1  as $materia)
              <tr style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
                 <th > {{$materia->clase->name}}</th>
                 <th> prioridad: {{$materia->prioridad}}</th>
              </tr>
        @empty
            <p>No has seleccionado nada</p>
        @endforelse
    </thead>
    <tbody>
      <tr>
        
      </tr>
    </tbody>
  </table>
    </div>
</div>
