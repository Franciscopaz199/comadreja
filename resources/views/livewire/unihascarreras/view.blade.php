@section('title', __('Unihascarreras'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado de universidades  </h4>
						</div>
						
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						
						
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.unihascarreras.create')
						@include('livewire.unihascarreras.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre </th>
								<th>Nombre corto</th>
								<td>Total carreras</td>
								<td>Actions</td>
							</tr>
						</thead>
						<tbody>
							@foreach($unihascarreras as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->shortname }}</td>
								<td>
									{{ $row->carreras->count() }}
								</td>
								<td width="90">
									<a data-toggle="modal" data-target="#updateModal" class="btn btn-primary" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i>Agregar</a>							 
								</td>
								
							@endforeach
						</tbody>
					</table>						
					{{ $unihascarreras->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
