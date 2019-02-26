@extends ('layouts.mainglobal')
@section ('contenido')
<section id="cover" class="cover-page  hidden-xs hidden-sm"></section>
@foreach ($servicios as $ser)
	@if($loop->iteration  % 2 == 0)
	<section id="service-content">
		<div class="service-item left">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="desc">
							<h2 style="color: #00B8B0">{{ $ser->ser_nam }}</h2>
							<div class="text">
								<p>{{ $ser->ser_des }}<br></p>
							</div>
							<br>
							@if (($ser->ser_bro) != "")
								<a href="{{asset('brochures/'.$ser->ser_bro)}}" class="show-more">Descargar brochure <i class="fa fa-caret-right"></i></a>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="row overflow">
				<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6" style="background-position: center left; background-image: url('{{asset('imagenes/servicios/'.$ser->ser_img)}}')"></div>
			</div>
		</div>
	</section>
	@else
	<section id="service-content">
		<div class="service-item right">
			<div class="row overflow">
				<div class="col-md-6 col-sm-6" style="background-position: center right; background-image: url('{{asset('imagenes/servicios/'.$ser->ser_img)}}')"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
						<div class="desc">
							<img src="" width="65px">
							<h2 style="color: #00B8B0">{{ $ser->ser_nam }}<small></small>
							</h2>
							<div class="text">
								<p>{{ $ser->ser_des }}</p>
							</div>
							<br>
							@if (($ser->ser_bro) != "")
								<a href="{{asset('brochures/'.$ser->ser_bro)}}" class="show-more">Descargar brochure <i class="fa fa-caret-right"></i></a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
@endforeach
@endsection