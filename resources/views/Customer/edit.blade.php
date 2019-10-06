@extends('layout.main')

@section('title', 'Ubah Data Customer')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="mt-3">
					<h1>Ubah Data Customer</h1>		
					<form method="POST" action="/Customer/{{ $customer->id}}">
						@csrf
						@method('patch')
					<div class="form-group">
						<label for="Nic">Nomor induk customer</label>						
						<input type="text" name="Nic" id="Nic" class="form-control" placeholder="Ketik nomor induk customer" value="{{ $customer->Nic}}">

						<label for="nama">Nama Lengkap</label>						
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Ketik nama customer" value="{{ $customer->nama_lengkap}}">

						<label for="np">Nama Panggilan</label>						
						<input type="text" name="np" id="np" class="form-control" placeholder="Ketik nama customer" value="{{ $customer->nama_panggilan}}">

						<label for="email">Email</label>						
						<input type="text" name="email" id="email" class="form-control" placeholder="Ketik nomor email" value="{{ $customer->email}}">

						<label for="alamat">Alamat</label>						
						<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Ketik alamat" value="{{ $customer->alamat}}">
					</div>
						<button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan Data</button>
					</form>					
				</div>
			 </div>
		 </div>
	</div>
@endsection