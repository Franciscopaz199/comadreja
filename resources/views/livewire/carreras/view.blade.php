@section('title', __('Carreras'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Carrera Listing </h4>
						</div>
						<div wire:poll.60s>
						
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Carreras">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Carreras
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.carreras.create')
						@include('livewire.carreras.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Shortname</th>
								<th>Status</th>
								<th>Logo</th>
								<th>Description</th>
								<th>Color1</th>
								<th>Color2</th>
								<th>Color3</th>
								<th>Facultad</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($carreras as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->shortname }}</td>
								<td>{{ $row->status }}</td>
								<td>{{ $row->logo }}</td>
								<td>{{ $row->description }}</td>
								<td>{{ $row->color1 }}</td>
								<td>{{ $row->color2 }}</td>
								<td>{{ $row->color3 }}</td>
								<td>{{ $row->facultad }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Carrera id {{$row->id}}? \nDeleted Carreras cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $carreras->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
