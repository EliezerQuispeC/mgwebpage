@extends ('layouts.admin')
@section ('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
            <h3>Listado de Servicios <a href="servicios/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('admin.servicios.search')
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <!--<th>Descripción</th>-->
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Brochure</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach ($servicios as $ser)
                        <tr>
                            <td>{{ $ser->ser_id }}</td>
                            <td>{{ $ser->ser_nam }}</td>
                            <!--<td>{{ $ser->ser_des }}</td>-->
                            <td>{{ $ser->categoria }}</td>
                            <td>
                                <img src="{{asset('imagenes/servicios/'.$ser->ser_img)}}" alt="{{ $ser->ser_nam }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>{{ $ser->ser_bro }}</td>
                            <td>{{ $ser->ser_sta }}</td>
                            <td>
                                <a href="{{URL::action('ServicioController@edit',$ser->ser_id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$ser->ser_id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('admin.servicios.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $servicios->render() }}
        </div>
    </div>
</div>
@endsection