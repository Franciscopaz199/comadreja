<div>
    <div class="botones-container">
    @for( $i = $clases; $i > ($clases -4) && $i>0 ; $i-- )
        <input type="radio" name="opcion" wire:click="clases1({{$i}})"  id="opcion{{$i}}" class="radio">
        <label for="opcion{{$i}}" class="labelradio">{{$i}} Clases</label>
   @endfor

    </div>
    <div class="container-clases-periodo">
        <div class="periodo">
            @forelse($clasesperiodo1 as $clase)
            @php
                $clase = $clase->clase;
            @endphp
            <article class="card-clase" style="margin-top: 10px;">
                <div class="card-uv">
                    <p class="description active">UV: {{$clase->UV}}</p>
                </div>
                <div class="card-informacion">  
                    <h4 class="name" style="text-align: center;">{{$clase->name}}</h4>
                    <p>{{ $clase->codigo }}</p>            
                </div>
                
            </article>
            @empty
            <p>No has seleccionado nada</p>
            @endforelse
        </div>
    </div>
</div>
