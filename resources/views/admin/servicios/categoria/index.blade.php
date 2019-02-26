@extends ('layouts.admin')
@section ('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
            <h3>Listado de Categorías de Servicios <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('admin.servicios.categoria.search')
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Categoría</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach ($categorias as $cat)
                        <tr>
                            <td>{{ $cat->ser_cat_id }}</td>
                            <td>{{ $cat->ser_cat_nam }}</td>
                            <td>
                                <a href="{{URL::action('ServicioCategoriaController@edit',$cat->ser_cat_id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$cat->ser_cat_id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('admin.servicios.categoria.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $categorias->render() }}
        </div>
    </div>
</div>
@endsection