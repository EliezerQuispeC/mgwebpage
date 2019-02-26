<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\FilaServicio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use mainglobal\Http\Requests\FilaServicioRequest;
use DB;

class FilaServicioController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            $filaServicios = DB::table('services_row as s')
            ->join('services as c','s.ser_id','=','c.ser_id')
            ->select('s.ser_row_id','s.ser_row_tit','s.ser_row_des','s.ser_row_img','c.ser_nam as servicio')
            ->where('s.ser_row_tit','LIKE','%'.$query.'%')
            ->orderBy('s.ser_row_id','desc')
            ->paginate(10);
            return view('admin.servicios.fila.index',["filaServicios"=>$filaServicios,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $servicios = DB::table('services')->where('ser_sta','=','Activo')->get();
        return view("admin.servicios.fila.create",["servicios"=>$servicios]);
    }

    public function store(FilaServicioRequest $request)
    {
        $filaServicio = new FilaServicio;
        $filaServicio->ser_row_tit = $request->get('titulo');
        $filaServicio->ser_row_des = $request->get('descripcion');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/imagenes/filaservicios/',$file->getClientOriginalName());
            $filaServicio->ser_row_img = $file->getClientOriginalName();
        }
        $filaServicio->ser_id = $request->get('idservicio');
        $filaServicio->save();
        return Redirect::to('admin/servicios/fila');
    }

    public function show($id)
    {
        return view('admin.servicios.filas.show',['servicio'=>Servicio::findOrFail($id)]);
    }

    public function edit($id)
    {
        $filaServicio = FilaServicio::findOrFail($id);
        $servicios = DB::table('services')->where('ser_sta','=','Activo')->get();
        return view('admin.servicios.fila.edit',['filaServicio'=>$filaServicio,'servicios'=>$servicios]); 
    }

    public function update(FilaServicioRequest $request, $id)
    {
        $filaServicio = FilaServicio::findOrFail($id);
        $filaServicio->ser_row_tit = $request->get('nombre');
        $filaServicio->ser_row_des = $request->get('descripcion');
        $filaServicio->ser_id = $request->get('idservicio');

        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/imagenes/filaservicios/',$file->getClientOriginalName());
            $filaServicio->ser_row_img = $file->getClientOriginalName();
        }
        $filaServicio->update();
        return Redirect::to('admin/servicios/fila');
    }

    public function destroy($id)
    {
        $filaServicio = filaServicio::findOrFail($id);
        $filaServicio->ser_sta = 'Inactivo';
        $filaServicio->update();
        return Redirect::to('admin/servicios/fila');
    }
}
