<div class="rectangulo-user
    @if($user->id == Auth::user()->id)
        rectangulo-user-active
            @endif
    ">
    <div class="icon">
        <ion-icon name="person-outline" class="icono-user"></ion-icon>
    </div>
    <div class="info-usuario">
        <h4>{{$user->usuario->name}}</h4>
        <h6>{{$user->carrer->name}}</h6>
    </div>
</div>
