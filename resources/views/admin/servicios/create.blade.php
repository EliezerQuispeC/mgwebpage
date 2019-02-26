@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Nuevo Servicio</h3>
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
            {!!Form::open(array('url'=>'admin/servicios','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre">
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
                <label for="categoria">Categoría</label>
                <select name="idcategoria" class="form-control">
                    @foreach ($categorias as $cat)
                        <option value="{{$cat->ser_cat_id}}">{{$cat->ser_cat_nam}}</option>
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
                <label for="brochure">Brochure</label>
                <input type="file" name="brochure"  class="form-control">
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