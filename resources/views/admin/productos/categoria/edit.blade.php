@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Editar Categoría: <br><b>{{ $categoria->pro_cat_nam }}<b></h3>
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
            {!!Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->pro_cat_id]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$categoria->pro_cat_nam}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {{!!Form::close()}}
        </div>
    </div>
@endsection