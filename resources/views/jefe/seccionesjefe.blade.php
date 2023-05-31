<div class="content">
    <div class="content-panel">
        @include('jefe.componentes.botones')
    </div>
    <div class="content-main">
        @if($status == 1)
            @include('jefe.componentes.seccionjefeuno')
        @elseif($status == 2)
            @include('jefe.componentes.seccionjefedos')
        @elseif($status == 3)
            @include('jefe.componentes.seccionjefetres')
        @elseif($status == 4)    
        @endif
        @include('jefe.componentes.modales')
    </div>
</div>  