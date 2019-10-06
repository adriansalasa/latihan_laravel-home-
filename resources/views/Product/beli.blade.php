@extends('layout.main')

@section('title', 'Beli')

@section('container')


<div class="container">
	<form method="POST" action="{{ url('/Product/beli')}}">
		@csrf
		<div class="column mt-4">		
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-danger">
					<li class="breadcrumb-item active text-white" aria-current="page"><h4>Pembelian</h4></li>
				</ol>
			</nav>
		</div>

		<div class="card-body bg-light">

			<div class="row">				
				<div class="col-sm-1"><label for="NmPaket">Paket</label></div>
				<div>:</div>
				<div class="col-sm-1">{{ $paket_pulsa->nama_paket}}
				</div>
				<input type="hidden" name="NmPaket" id="NmPaket" value="{{ $paket_pulsa->nama_paket}}">		
			</div>
			
			<div class="row mt-2">
				<div class="col-sm-1"><label for="HrgPaket">Harga</label></div>
				<div>:</div>
				<div class="col-sm-1">{{ $paket_pulsa->harga_paket}}
				</div>
				<input type="hidden" name="HrgPaket" id="HrgPaket" value="{{ $paket_pulsa->harga_paket}}">		
			</div>

			<div class="row mt-2">
				<div class="col-sm-1"> <label for="NTelp">No. Telp</label></div>
				<div>:</div>				
				<div class="col-sm-3">
					<input type="text" class="form-control @error('NTelp') is-invalid @enderror" id="NTelp" placeholder="masukan nomer telepon" name="NTelp" >

					@error('NTelp')							
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
						
				</div>
			</div>

			<div class="row mt-3 ml-4">
				<div class="col-sm-5 text text-danger"><b>Silahkan Transfer ke No. Rekening Dibawah ini : </b></div>
			</div>

			<div class="row mt-3 ml-4">
				 <div class="col-sm-2"><label for="NRek">Nomor. Rekening</label></div>
				 <div>:</div>
				 <div class="col-sm-2"><input class="form-control" type="text" name="NRek" id="NRek" value="578055197"></div>
			</div>

			<div class="row mt-3 ml-4">
				 <div class="col-sm-2"><label for="NmPem">Nama. Pemilik</label></div>
				 <div>:</div>
				 <div class="col-sm-3"><input class="form-control" type="text" name="NmPem" id="NmPem" value="Great Technology"></div>			
			</div>

			<div class="row mt-3 ml-5">
				<div class="ml-5">
					<div class="ml-4">
				<!-- <button type="submit" class="btn btn-danger">Process</button> -->
				 		<a href="/Product" class="btn btn-danger ml-5">Back</a>
				 		<button type="submit" class="btn btn-primary">Process</button> 
					</div>
				</div>
			</div>

		</div>
	</form>
</div>

@endsection