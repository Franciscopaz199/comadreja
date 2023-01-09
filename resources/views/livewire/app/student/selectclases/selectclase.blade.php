<div class="right-section">
    {{ auth()->user()->name }}  
<div class="formulario-container">
    <div class="title">
     <h4>Por favor</h4>
     <p>selecciona todas las clases que has pasado</p>
    </div>
</div>
<div class="container-select-uni" >
 <div class="slide-container swiper">
    <div class="slide-content">
        <form class="card-wrapper swiper-wrapper">   
            @csrf
                @foreach ($clases as $uni)
                <input type="checkbox" wire:model="clasespasadas"  value="{{$uni->id}}" id="{{$uni->id}}" class="radioseleccion" >
                       <label class="card swiper-slide" for="{{$uni->id}}">
                           <div class="image-content">
                               <span class="overlay"></span>
                               <div class="card-image">
                                   <img src="{{ asset( $uni->logo )  }}" alt="" class="card-img">
                               </div>
                           </div>
                           <div class="card-content">
                               <h2 class="name">{{$uni->name}}</h2>
                               <p class="description">{{$uni->codigo}}</p>
                               <p class="description">{{$uni->description}}</p>
                           </div>
                       </label>
            @endforeach
        </form>
       
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>

</div>

<div class="btn-container">
    <button class="btn btn-primary boton-enviar" type="submit" form="formulario">Continuar</button>
</div>

</div>