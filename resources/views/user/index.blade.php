@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">ACCESS CONTROL LIST</h6>
	<hr>
	<div class="card">
		<div class="card-body">
            <div class="col-lg-2">
                <a href="{{ route('user.create') }}" class="btn btn-success px-4 raised d-flex gap-2"><i class="material-icons-outlined">account_circle</i>Add User</a>
            </div>
			<table class="table mb-0 table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Is Admin</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($user as $data)
					<tr>
						<th scope="row">{{$loop->index+1}}</th>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->is_admin ? 'Admin' : 'User'}}</td>
						<td>
                            <a href="{{ route('user.show', $data->id) }}" class="btn btn-primary raised gap-2"><i class="material-icons-outlined">search</i></a>
                            <a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning raised"><i class="material-icons-outlined">cloud_upload</i>EDIT</a>
                            <button type="button" class="btn btn-danger raised"><i class="material-icons-outlined">delete</i>HAPUS</button>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
