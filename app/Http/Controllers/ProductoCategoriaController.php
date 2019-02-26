<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\ProductoCategoria;
use Illuminate\Support\Facades\Redirect;
use mainglobal\Http\Requests\ProductoCategoriaRequest;
use DB;

class ProductoCategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            $categorias = DB::table('products_cat')
            ->where('pro_cat_nam','LIKE','%'.$query.'%')
            ->where('pro_cat_con','=','1')
            ->orderBy('pro_cat_id','desc')
            ->paginate(10);
            return view('admin.productos.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    
    public function create()
    {
        return view('admin.productos.categoria.create');
    }

    public function store(ProductoCategoriaRequest $request)
    {
        $categoria = new ProductoCategoria;
        $categoria->pro_cat_nam = $request->get('nombre');
        $categoria->pro_cat_con = '1';
        $categoria->save();
        return Redirect::to('admin/productos/categoria');
    }

    public function show($id)
    {
        return view('admin.productos.categoria.show',['categoria'=>ProductoCategoria::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('admin.productos.categoria.edit',['categoria'=>ProductoCategoria::findOrFail($id)]);
    }

    public function update(ProductoCategoriaRequest $request, $id)
    {
        $categoria = ProductoCategoria::findOrFail($id);
        $categoria->pro_cat_nam = $request->get('nombre');
        $categoria->update();
        return Redirect::to('admin/productos/categoria');
    }

    public function destroy($id)
    {
        $categoria = ProductoCategoria::findOrFail($id);
        $categoria->pro_cat_con = '0';
        $categoria->update();
        return Redirect::to('admin/productos/categoria');
    }
}
