<div>
    <div class="main-header">
        <p>Selecciona el modo</p>

    </div>
    <div class="horizontal-tabs">
        <a href="#" @if($status == 1) class="active" @endif  wire:click="changeStatus(1)">Automatico</a>
        <a href="#" @if($status == 2) class="active" @endif wire:click="changeStatus(2)">Manual</a>
    </div>
        @if($status == 1)
            <livewire:plandeestudios  />
        @else
        <!--
        <div class="content-header">
            <div class="content-header-intro">
                <h2>Generando plan de estudio manualmente</h2>
                <p>Se generara un plan de estudio manualmente</p>
            </div>
        </div>-->
        <hr>
        <div class="content" style="border:  1px dashed #ccc; 
            display: flex;
            justify-content: center;
            align-items: center;
            border-width: 2px;  
            border-radius: 20px;
            box-sizing: border-box;
            padding: 40px;
            "
        >
            <h2
                style="text-align: center;
                font-size: 20px;
                color: #ccc;
                "
            >Proximamente</h2>
        </div>  
     
        @endif

   
    
</div>
