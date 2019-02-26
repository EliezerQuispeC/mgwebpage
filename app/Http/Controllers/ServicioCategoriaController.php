<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\ServicioCategoria;
use Illuminate\Support\Facades\Redirect;
use mainglobal\Http\Requests\ServicioCategoriaRequest;
use DB;

class ServicioCategoriaController extends Controller
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
            $categorias = DB::table('services_cat')
            ->where('ser_cat_nam','LIKE','%'.$query.'%')
            ->where('ser_cat_con','=','1')
            ->orderBy('ser_cat_id','desc')
            ->paginate(10);
            return view('admin.servicios.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    
    public function create()
    {
        return view('admin.servicios.categoria.create');
    }

    public function store(ServicioCategoriaRequest $request)
    {
        $categoria = new ServicioCategoria;
        $categoria->ser_cat_nam = $request->get('nombre');
        $categoria->ser_cat_con = '1';
        $categoria->save();
        return Redirect::to('admin/servicios/categoria');
    }

    public function show($id)
    {
        return view('admin.servicios.categoria.show',['categoria'=>ServicioCategoria::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('admin.servicios.categoria.edit',['categoria'=>ServicioCategoria::findOrFail($id)]);
    }

    public function update(ServicioCategoriaRequest $request, $id)
    {
        $categoria = ServicioCategoria::findOrFail($id);
        $categoria->ser_cat_nam = $request->get('nombre');
        $categoria->update();
        return Redirect::to('admin/servicios/categoria');
    }

    public function destroy($id)
    {
        $categoria = ServicioCategoria::findOrFail($id);
        $categoria->ser_cat_con = '0';
        $categoria->update();
        return Redirect::to('admin/servicios/categoria');
    }
}
