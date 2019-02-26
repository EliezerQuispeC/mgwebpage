<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use mainglobal\Http\Requests\ProductoRequest;
use DB;

class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            $productos = DB::table('products as p')
            ->join('products_cat as c','p.pro_cat_id','=','c.pro_cat_id')
            ->select('p.pro_id','p.pro_nam','p.pro_des','p.pro_img_1','p.pro_img_2','p.pro_img_3','p.pro_img_4','c.pro_cat_nam as categoria','p.pro_fic_tec','p.pro_bro','p.pro_sta')
            ->where('p.pro_nam','LIKE','%'.$query.'%')
            ->orderBy('p.pro_id','desc')
            ->paginate(10);
            return view('admin.productos.index',["productos"=>$productos,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $categorias = DB::table('products_cat')->where('pro_cat_con','=','1')->get();
        return view("admin.productos.create",["categorias"=>$categorias]);
    }

    public function store(ProductoRequest $request)
    {
        $producto = new Producto;
        $producto->pro_nam = $request->get('nombre');
        $producto->pro_des = $request->get('descripcion');
        $producto->pro_cat_id = $request->get('idcategoria');
        $producto->pro_sta = ('Activo');
        if(Input::hasFile('imagen1')){
            $file = Input::file('imagen1');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_1 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen2')){
            $file = Input::file('imagen2');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_2 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen3')){
            $file = Input::file('imagen3');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_3 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen4')){
            $file = Input::file('imagen4');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_4 = $file->getClientOriginalName();
        }
        if(Input::hasFile('ficha_tecnica')){
            $file = Input::file('ficha_tecnica');
            $file->move(public_path().'_html/fichas_tecnicas/',$file->getClientOriginalName());
            $producto->pro_fic_tec = $file->getClientOriginalName();
        }
        if(Input::hasFile('brochure')){
            $file = Input::file('brochure');
            $file->move(public_path().'_html/brochures/',$file->getClientOriginalName());
            $producto->pro_bro = $file->getClientOriginalName();
        }
        $producto->save();
        return Redirect::to('admin/productos');
    }

    public function show($id)
    {
        return view('admin.productos.show',['producto'=>Producto::findOrFail($id)]);
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = DB::table('products_cat')->where('pro_cat_con','=','1')->get();
        return view('admin.productos.edit',['producto'=>$producto,'categorias'=>$categorias]); 
    }

    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pro_nam = $request->get('nombre');
        $producto->pro_des = $request->get('descripcion');
        $producto->pro_cat_id = $request->get('idcategoria');
        $producto->pro_sta = ('Activo');
        if(Input::hasFile('imagen1')){
            $file = Input::file('imagen1');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_1 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen2')){
            $file = Input::file('imagen2');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_2 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen3')){
            $file = Input::file('imagen3');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_3 = $file->getClientOriginalName();
        }
        if(Input::hasFile('imagen4')){
            $file = Input::file('imagen4');
            $file->move(public_path().'_html/imagenes/productos/',$file->getClientOriginalName());
            $producto->pro_img_4 = $file->getClientOriginalName();
        }
        if(Input::hasFile('ficha_tecnica')){
            $file = Input::file('ficha_tecnica');
            $file->move(public_path().'_html/fichas_tecnicas/',$file->getClientOriginalName());
            $producto->pro_fic_tec = $file->getClientOriginalName();
        }
        if(Input::hasFile('brochure')){
            $file = Input::file('brochure');
            $file->move(public_path().'_html/brochures/',$file->getClientOriginalName());
            $producto->pro_bro = $file->getClientOriginalName();
        }
        $producto->update();
        return Redirect::to('admin/productos');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pro_sta = 'Inactivo';
        $producto->update();
        return Redirect::to('admin/productos');
    }
}
