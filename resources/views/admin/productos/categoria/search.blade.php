{!! Form::open(array('url'=>'admin/productos/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<!--//Abrimos formularo
//url: la ruta a donde redireccionamos el formulario (en este caso sera : index.blade.php)
//method: para enviar el parametro de busqueda, nos permite filtrar las categorias-->
<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </span>
    </div>
</div>
{{Form::close()}}