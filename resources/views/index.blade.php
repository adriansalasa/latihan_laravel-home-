@extends('layout.main')

@section('title', 'Coffee Web')

@section('container')
<!DOCTYPE html>
<html>

<style>
	
.right {
  position: absolute;
  right: 0px;
  width: 250px;
  padding: 10px;
}
</style>
<body>

		<!-- <audio controls autoplay>
		<source src="bell.wav" type="audio/wav">
		<source src="bell.mp3" type="audio/mpeg">		
			 Your browser does not support the audio element.
	</audio> -->

<!-- 	<iframe src="bell.mp3" allow="autoplay" id="audio" style="display:none"></iframe>

	<audio id="audio" autoplay loop>
    	<source src="bell.mp3" type="audio/mp3">
	</audio>
 -->

	<div class="right mr-5 mt-4">
		<p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 
		In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
		In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
		In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
		In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
		</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="mt-3">
					<!-- <h3>Welcome to Coffee cafe</h3>		 -->
					<br>
					
					<!-- echo file_get_contents(software.jpg) ; -->
					<img src="software.jpg" class="img-fluid rounded" alt="Responsive image">

					
					<h2 class="mt-5">Selamat Datang   					
					 </h2>	
					<p style="font-family: verdana; font-size: 20px">
						Perkembangan Teknologi Informasi disini tempatnya, IOT(Internet of things), Web Programming, Desktop Programming, SMSGateway. Bergabunglah bersama kami.
					</p>

					


				</div>
			 </div>
		 </div>
	</div>
	
 @endsection
 </body>
</html>