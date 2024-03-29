@section('title', __('Jefesdepartamentos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Asociar Jefes de departamento </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Clases">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Clases
						</div>
					</div>
				</div>
				
				<div class="card-body">
					@include('livewire.jefesdepartamentos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>User Id</th>
								<th>Depto Id</th>
								<th>Uni Id</th>
								<th>Accountnumber</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($jefesdepartamentos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->user->name }}</td>
								<td>{{ $row->departamento->name }}</td>
								<td>{{ $row->uni->name }}</td>
								<td>{{ $row->accountnumber }}</td>
								<td width="90">
									<div class="btn-group">
										<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Actions
										</button>
										<div class="dropdown-menu dropdown-menu-right">
										<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
										<a class="dropdown-item" onclick="confirm('Confirm Delete Clase id {{$row->id}}? \nDeleted Clases cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
										</div>
									</div>							
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					{{ $jefesdepartamentos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
