@extends ('layouts.admin')
@section ('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
            <h3>Filas agregadas a los servicios <a href="fila/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('admin.servicios.fila.search')
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Servicio</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach ($filaServicios as $fil)
                        <tr>
                            <td>{{ $fil->ser_row_id }}</td>
                            <td>{{ $fil->ser_row_tit }}</td>
                            <td>{{ $fil->ser_row_des }}</td>
                            <td>{{ $fil->servicio }}</td>
                            <td>
                                <img src="{{asset('imagenes/filaservicios/'.$fil->ser_row_img)}}" alt="{{ $fil->ser_row_tit }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{URL::action('FilaServicioController@edit',$fil->ser_row_id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$fil->ser_row_id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('admin.servicios.fila.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $filaServicios->render() }}
        </div>
    </div>
</div>
@endsection