<div class="vertical-tabs">
    <a href="#" @if($status == 1) class="active" @endif  wire:click="changeStatus(1)">Todas las clases</a>
    <a href="#" @if($status == 2) class="active" @endif  wire:click="changeStatus(2)">Filtrar por</a>
    <a href="#" @if($status == 3) class="active" @endif  wire:click="changeStatus(3)">Prioridad</a>
    <a href="#" @if($status == 4) class="active" @endif  wire:click="changeStatus(4)">Prioridad</a>
</div>