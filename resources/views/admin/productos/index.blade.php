@extends ('layouts.admin')
@section ('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
            <h3>Listado de Productos <a href="productos/create"><button class="btn btn-success">Nuevo</button></a></h3>
            @include('admin.productos.search')
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
                        <th>Imagen 1</th>
                        <th>Imagen 2</th>
                        <th>Imagen 3</th>
                        <th>Imagen 4</th>
                        <th>Ficha técnica</th>
                        <th>Brochure</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                    @foreach ($productos as $pro)
                        <tr>
                            <td>{{ $pro->pro_id }}</td>
                            <td>{{ $pro->pro_nam }}</td>
                            <!--<td>{{ $pro->pro_des }}</td>-->
                            <td>{{ $pro->categoria }}</td>
                            <td>
                                <img src="{{asset('imagenes/productos/'.$pro->pro_img_1)}}" alt="{{ $pro->pro_nam }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="{{asset('imagenes/productos/'.$pro->pro_img_2)}}" alt="{{ $pro->pro_nam }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="{{asset('imagenes/productos/'.$pro->pro_img_3)}}" alt="{{ $pro->pro_nam }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="{{asset('imagenes/productos/'.$pro->pro_img_4)}}" alt="{{ $pro->pro_nam }}" height="100px" width="100px" class="img-thumbnail">
                            </td>
                            <td>{{ $pro->pro_fic_tec }}</td>
                            <td>{{ $pro->pro_bro }}</td>
                            <td>{{ $pro->pro_sta }}</td>
                            <td>
                                <a href="{{URL::action('ProductoController@edit',$pro->pro_id)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$pro->pro_id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('admin.productos.modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $productos->render() }}
        </div>
    </div>
</div>
@endsection