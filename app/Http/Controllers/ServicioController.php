<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\Servicio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use mainglobal\Http\Requests\ServicioRequest;
use DB;

class ServicioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }   

    public function index(Request $request){
        if($request)
        {
            $query = trim($request->get('searchText'));
            $servicios = DB::table('services as s')
            ->join('services_cat as c','s.ser_cat_id','=','c.ser_cat_id')
            ->select('s.ser_id','s.ser_nam','s.ser_des','s.ser_img','s.ser_bro','c.ser_cat_nam as categoria','s.ser_sta')
            ->where('s.ser_nam','LIKE','%'.$query.'%')
            ->orderBy('s.ser_id','desc')
            ->paginate(10);
            return view('admin.servicios.index',["servicios"=>$servicios,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $categorias = DB::table('services_cat')->where('ser_cat_con','=','1')->get();
        return view("admin.servicios.create",["categorias"=>$categorias]);
    }

    public function store(ServicioRequest $request)
    {
        $servicio = new Servicio;
        $servicio->ser_nam = $request->get('nombre');
        $servicio->ser_des = $request->get('descripcion');
        $servicio->ser_cat_id = $request->get('idcategoria');
        $servicio->ser_sta = ('Activo');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'_html/imagenes/servicios/',$file->getClientOriginalName());
            $servicio->ser_img = $file->getClientOriginalName();
        }
        if(Input::hasFile('brochure')){
            $file = Input::file('brochure');
            $file->move(public_path().'_html/brochures/',$file->getClientOriginalName());
            $servicio->ser_bro = $file->getClientOriginalName();
        }
        $servicio->save();
        return Redirect::to('admin/servicios');
    }

    public function show($id)
    {
        return view('admin.servicios.show',['servicio'=>Servicio::findOrFail($id)]);
    }

    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        $categorias = DB::table('services_cat')->where('ser_cat_con','=','1')->get();
        return view('admin.servicios.edit',['servicio'=>$servicio,'categorias'=>$categorias]); 
    }

    public function update(ServicioRequest $request, $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->ser_nam = $request->get('nombre');
        $servicio->ser_des = $request->get('descripcion');
        $servicio->ser_cat_id = $request->get('idcategoria');
        $servicio->ser_sta = ('Activo');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'_html/imagenes/servicios/',$file->getClientOriginalName());
            $servicio->ser_img = $file->getClientOriginalName();
        }
        if(Input::hasFile('brochure')){
            $file = Input::file('brochure');
            $file->move(public_path().'_html/brochures/',$file->getClientOriginalName());
            $servicio->ser_bro = $file->getClientOriginalName();
        }
        $servicio->update();
        return Redirect::to('admin/servicios');
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->ser_sta = 'Inactivo';
        $servicio->update();
        return Redirect::to('admin/servicios');
    }
}
