@extends ('layouts.mainglobal')
@section ('contenido')
<div class="wrapper">
	<section id="cover" class="cover-page hidden-xs hidden-sm"></section>
	<section id="about" class="about-page">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="panel panel-default">
  						<div class="panel-body">
							<h2 class="text-center">{{ $nom_cat->pro_cat_nam }}</h2>
						</div>
					</div>
					<div class="list-group">
					@foreach ($productos as $pro)
						@if($pro->pro_id == $producto)
						<a href="#" class="list-group-item active">
							{{ $pro->pro_nam }}
						</a>
						@else
						<a href="{{URL::action('PageController@productos',$nom_cat->pro_cat_id.'/'.$pro->pro_id)}}" class="list-group-item">{{ $pro->pro_nam }}</a>	
						@endif
					@endforeach
					</div>
				</div>
				<div class="col-md-9 col-sm-9" style="background-color:white;">
				@foreach ($productos as $pro)
					@if($pro->pro_id == $producto)
						<h2>{{ $pro->pro_nam }}</h2>
						<div class="text-center">
							@if (($pro->pro_fic_tec) != "")
							<div class="col-md-6 col-sm-6">
								<div class="thumbnail">
									<a href="{{asset('brochures/'.$pro->pro_fic_tec)}}">
										<button class="btn btn-info">Descarga Ficha Técnica</button>
									</a>
								</div>
							</div>
							@else
							<div class="col-md-6 col-sm-6">
								<div class="thumbnail">
									<button class="btn btn-info">Descarga Ficha Técnica</button>
								</div>
							</div>
							@endif
							@if (($pro->pro_bro) != "")
							<div class="col-md-6 col-sm-6">
								<div class="thumbnail">
									<a href="{{asset('brochures/'.$pro->pro_bro)}}">
										<button class="btn btn-success">Descarga Brochure</button>
									</a>
								</div>
							</div>
							@else
							<div class="col-md-6 col-sm-6">
								<div class="thumbnail">
									<button class="btn btn-success">Descarga Brochure</button>
								</div>
							</div>
							@endif
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<p>{{ $pro->pro_des }}</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slider -->
						<div class="row">
							<div class="col-sm-3" >
								<!-- Bottom switcher of slider -->
								<ul class="hide-bullets">
									<li class="col-sm-12">
										<a class="thumbnail" id="carousel-selector-0">
											<img src="{{asset('imagenes/productos/'.$pro->pro_img_1)}}">
										</a>
									</li>

									<li class="col-sm-12">
										<a class="thumbnail" id="carousel-selector-1"><img src="{{asset('imagenes/productos/'.$pro->pro_img_2)}}"></a>
									</li>

									<li class="col-sm-12">
										<a class="thumbnail" id="carousel-selector-2"><img src="{{asset('imagenes/productos/'.$pro->pro_img_3)}}"></a>
									</li>

									<li class="col-sm-12">
										<a class="thumbnail" id="carousel-selector-3"><img src="{{asset('imagenes/productos/'.$pro->pro_img_4)}}"></a>
									</li>
									
								</ul>
							</div>
							<div class="col-sm-9">
								<div class="col-xs-12" id="slider">
									<!-- Top part of the slider -->
									<div class="row">
										<div class="col-sm-12" id="carousel-bounding-box">
											<div class="carousel slide" id="myCarousel">
												<!-- Carousel items -->
												<div class="carousel-inner">
													<div class="active item" data-slide-number="0">
														<img src="{{asset('imagenes/productos/'.$pro->pro_img_1)}}"></div>

													<div class="item" data-slide-number="1">
														<img src="{{asset('imagenes/productos/'.$pro->pro_img_2)}}"></div>

													<div class="item" data-slide-number="2">
														<img src="{{asset('imagenes/productos/'.$pro->pro_img_3)}}"></div>

													<div class="item" data-slide-number="3">
														<img src="{{asset('imagenes/productos/'.$pro->pro_img_4)}}"></div>

												</div>
												<!-- Carousel nav -->
												<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left"></span>
												</a>
												<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Slider-->
					@endif
				@endforeach
				</div>
			</div>
		</div>
	</section>
</div>
@endsection