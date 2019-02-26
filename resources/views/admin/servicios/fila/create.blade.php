@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Añadir nueva fila</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
            <!-- La url es la ruta en web.php--->
            <!-- Segun el metodo llamamos a la funcion de categoriacontroller, en este caso como es post llamaos a la funcion store  -->
            {!!Form::open(array('url'=>'admin/servicios/fila','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" required value="{{old('titulo')}}" class="form-control" placeholder="Titulo">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" rows="15" class="form-control">{{old('descripcion')}}</textarea>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="servicio">Servicio</label>
                <select name="idservicio" class="form-control">
                    @foreach ($servicios as $ser)
                        <option value="{{$ser->ser_id}}">{{$ser->ser_nam}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen"  class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>

    {{!!Form::close()}}
@endsection