@extends('layout.main')

@section('title', 'Our Product')

@section('container')

<div class="container">
	<div class="row">
		<div class="ml-5 mt-3">
			<div class="ml-5">
				<br>				
						<h1 class="ml-5" style="font-variant-caps: titling-case;">Dapatkan Produk Terbaik kami</h1>
						@if(session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mt-4">
		@foreach($paket_pulsas as $paket_pulsa)
		<div class="col-sm-4">
			<!-- <form method="POST" action="{{ url('/Product/beli')}}"> -->
				@csrf
				<div class="card">			
					<div class="card-header bg-warning">
						<h2 class="text-white">{{ $paket_pulsa->nama_paket }}</h2>
						<input type="hidden" name="nmPaket" id="Gold" value="{{ $paket_pulsa->nama_paket }}">
					</div>
					<div class="card-body card-warning">					
						<h5 class="card-title">{{ $paket_pulsa->harga_paket }}<hr></h5>
						<input type="hidden" name="harga" id="harga" value="{{ $paket_pulsa->harga_paket }}">							
						<div class="card-text ml-1">
							<p>{{ $paket_pulsa->pesan}}</p>							
						</div>
						<a href="/Product/beli/{{$paket_pulsa->id}}" class="btn btn-danger" >Beli Paket</a>
					</div>
				</div>
			<!-- </form> -->
		</div>
		@endforeach


		<!-- <div class="col-sm-4">
			<form method="POST" action="{{ url('/Product/beli')}}">
			@csrf
				<div class="card">			
					<div class="card-header bg-secondary">
						<h2 class="text-white">Silver</h2>
						<input type="hidden" name="nmPaket" id="Silver" value="Silver">
					</div>
					<div class="card-body card-secondary">					
						<h5 class="card-title">Rp. 500.000 /bln<hr></h5>
						<input type="hidden" name="harga" id="harga" value="500000">							
						<div class="card-text ml-1">
							<p> Gratis sms ke sesama</p>
							<p> Kuota 4G 80 GB</p>
							<p> Gratis telpon 24 jam</p>
							<button type="submit" class="btn btn-danger">Beli Paket</button>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="col-sm-4">
			<form method="POST" action="{{ url('/Product/beli')}}">
			@csrf
				<div class="card">			
					<div class="card-header bg-dark">
						<h2 class="text-white">Platinum</h2>
						<input type="hidden" name="nmPaket" id="Platinum" value="Platinum">
					</div>
					<div class="card-body card-dark">					
						<h5 class="card-title">Rp. 1000.000 /bln<hr></h5>
						<input type="hidden" name="harga" id="harga" value="1000000">						
						<div class="card-text ml-1">
							<p> Gratis sms ke semua operator</p>
							<p> Kuota 4G 350 GB</p>
							<p> Gratis telpon 24 jam</p>
							<button type="submit" class="btn btn-danger">Beli Paket</button>
						</div>
					</div>
				</div>
			</form>
		</div> -->

	</div>

</div>

@endsection