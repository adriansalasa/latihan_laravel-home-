@extends('layout.main')

@section('title', 'Data Customer')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="mt-3">
					<h1 class="ml-3">Customer Detail</h1>	
					<div class="col-sm-6 mt-3">
						<div class="card">
						  <h5 class="card-header">{{ $customer -> nama_panggilan}}</h5>
						  <div class="card-body">
						    <h5 class="card-title">{{ $customer -> Nic}}</h5>
						    <p class="card-text">{{ $customer -> email}}</p>
						    <p class="card-text">{{ $customer -> alamat}}</p>
						    <a href="/Customer" class="btn btn-primary">Back</a>

						    <a href="/Customer/{{ $customer -> id}}/edit" class="btn btn-primary">Edit</a>
						    <!-- <form method="POST" action="/Customer/{{ $customer -> id}}/edit" class="d-inline">
						    	@csrf
						    	<button class="btn btn-primary" type="submit">Edit</button>
						    </form> -->
						  </div>
						</div>	
					</div>
					
				</div>
			 </div>
		 </div>
	</div>
@endsection