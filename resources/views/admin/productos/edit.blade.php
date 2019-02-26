@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-sm-6">
            <h3>Editar Producto: {{ $producto->pro_nam }}</h3>
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
    <!-- Segun el metodo llamamos a la funcion de producto controller, en este caso como es post llamaos a la funcion store  -->
    {!!Form::model($producto ,['method'=>'PATCH','route'=>['productos.update',$producto->pro_id],'files'=>'true'])!!}
    {{Form::token()}}
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{$producto->pro_nam}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" rows="15" class="form-control" required>{{$producto->pro_des}}</textarea>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select name="idcategoria" class="form-control">
                    @foreach ($categorias as $cat)
                        @if ($cat->pro_cat_id == $producto->pro_cat_id)
                        <option value="{{$cat->pro_cat_id}}" selected>{{$cat->pro_cat_nam}}</option>
                        @else
                        <option value="{{$cat->pro_cat_id}}">{{$cat->pro_cat_nam}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen1">Imagen 1</label>
                <input type="file" name="imagen1"  class="form-control">
                @if(($producto->pro_img_1)!="")
                    <img src="{{asset('imagenes/productos/'.$producto->pro_img_1)}}" height="300px" width="300px">
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen2">Imagen 2</label>
                <input type="file" name="imagen2"  class="form-control">
                @if(($producto->pro_img_2)!="")
                    <img src="{{asset('imagenes/productos/'.$producto->pro_img_2)}}" height="300px" width="300px">
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen3">Imagen 3</label>
                <input type="file" name="imagen3"  class="form-control">
                @if(($producto->pro_img_3)!="")
                    <img src="{{asset('imagenes/productos/'.$producto->pro_img_3)}}" height="300px" width="300px">
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen4">Imagen 4</label>
                <input type="file" name="imagen4"  class="form-control">
                @if(($producto->pro_img_4)!="")
                    <img src="{{asset('imagenes/productos/'.$producto->pro_img_4)}}" height="300px" width="300px">
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="ficha_tecnica">Ficha técnica</label>
                <input type="file" name="ficha_tecnica" class="form-control">
                @if(($producto->pro_fic_tec)!="")
                    <label>{{$producto->pro_fic_tec}}</label>
                @endif
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="brochure">Brochure</label>
                <input type="file" name="brochure" class="form-control">
                @if(($producto->pro_bro)!="")
                    <label>{{$producto->pro_bro}}</label>
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