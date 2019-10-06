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
					@if ($paket_pulsa->nama_paket === 'Gold')
					<div class="card-header bg-warning">
					@elseif ($paket_pulsa->nama_paket === 'Silver')
					<div class="card-header bg-secondary">
					@else
					<div class="card-header bg-dark">
					@endif
						<h2 class="text-white">{{ $paket_pulsa->nama_paket }}</h2>						
						<input type="hidden" name="nmPaket" id="Gold" value="{{ $paket_pulsa->nama_paket }}">
					</div>
					<div class="card-body card-danger">			
						<!-- {{$tmpHarga = number_format($paket_pulsa->harga_paket,2,",",".")}}					 -->
						<h5 class="card-title">Rp. {{ number_format($paket_pulsa->harga_paket,2,",",".") }}/bulan<hr></h5>
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

	</div>

</div>

@endsection