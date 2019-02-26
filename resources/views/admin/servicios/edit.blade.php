@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Editar Servicio: {{ $servicio->ser_nam }}</h3>
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
            <!-- Segun el metodo llamamos a la funcion de servicio controller, en este caso como es post llamaos a la funcion store  -->
            {!!Form::model($servicio ,['method'=>'PATCH','route'=>['servicios.update',$servicio->ser_id],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{$servicio->ser_nam}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" rows="15" class="form-control" required>{{$servicio->ser_des}}</textarea>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select name="idcategoria" class="form-control">
                    @foreach ($categorias as $cat)
                        @if ($cat->ser_cat_id == $servicio->ser_cat_id)
                        <option value="{{$cat->ser_cat_id}}" selected>{{$cat->ser_cat_nam}}</option>
                        @else
                        <option value="{{$cat->ser_cat_id}}">{{$cat->ser_cat_nam}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen"  class="form-control">
                @if(($servicio->ser_img)!="")
                    <img src="{{asset('imagenes/servicios/'.$servicio->ser_img)}}" height="300px" width="300px">
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="brochure">Brochure</label>
                <input type="file" name="brochure" class="form-control">
                @if(($servicio->ser_bro)!="")
                    <label>{{$servicio->ser_bro}}</label>
                @endif
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