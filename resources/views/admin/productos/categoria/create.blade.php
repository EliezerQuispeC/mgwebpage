@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Nueva Categoría de Productos</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <!-- La url es la ruta en web.php--->
            <!-- Segun el metodo llamamos a la funcion de categoriacontroller, en este caso como es post llamaos a la funcion store  -->
            {!!Form::open(array('url'=>'admin/productos/categoria','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {{!!Form::close()}}
        </div>
    </div>
@endsection