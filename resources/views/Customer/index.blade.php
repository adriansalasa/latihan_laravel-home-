@extends('layout.main')

@section('title', 'Data Customer')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="mt-3">
					<h1>Customer List</h1>		
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
					<table class="table mt-3">
						<thead class="thead-dark">
							<tr>
								<th scope="col">N0</th>
								<th scope="col">Nic</th>
								<th scope="col">Nama</th>
								<th scope="col">Email</th>								
								<th scope="col">alamat</th>
								<th scope="col">Action</th>
							</tr>							 
						</thead>
						<tbody>
							@foreach($customer as $cusDt)
							<tr>								
								<th scope="row">{{ $loop -> iteration}}</th>								
									<td>{{ $cusDt -> Nic}}</td>
									<td>{{ $cusDt -> nama_panggilan}}</td>
									<td>{{ $cusDt -> email}}</td>
									<td>{{ $cusDt -> alamat}}</td>
									<td>
										
										<a href="/Customer/{{$cusDt -> id}}" class="btn btn-info">View</a>

										<form method="POST" action="/Customer/{{$cusDt -> id}}" class="d-inline">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-danger" name="btnDelete" id="btnDelete" action="/Customer/{{$cusDt -> id}}">Delete
											</button>
										</form>

									</td>								
							</tr>
							@endforeach
						</tbody>						
					</table>
					<div class="d-inline">
						<a href="/" class="btn btn-danger">Back</a>
						<a href="/Customer/new" class="btn btn-primary">Tambah Data</a>						
					</div>
				</div>
			 </div>
		 </div>
	</div>
@endsection