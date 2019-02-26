<?php

namespace mainglobal\Http\Controllers;

use Illuminate\Http\Request;

use mainglobal\Producto;
use mainglobal\ProductoCategoria;
use mainglobal\Servicio;
use mainglobal\ServicioCategoria;
use Illuminate\Support\Facades\Redirect;
use DB;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        return view('pages.index',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats]);
    }

    public function nosotros()
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        return view('pages.nosotros',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats]);
    }

    public function servicios($cat_id)
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $servicios = DB::table('services')->get()
        ->where('ser_cat_id','=',$cat_id);
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        return view('pages.servicios',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats, 'servicios'=>$servicios]);
    }

    public function productos($cat_id, $pro_id)
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $productos = DB::table('products')->get()
        ->where('pro_cat_id','=',$cat_id);
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        $nom_cat = ProductoCategoria::findOrFail($cat_id);
        $producto = $pro_id;
        return view('pages.productos',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats, 'productos'=>$productos, 'nom_cat'=>$nom_cat, 'producto'=>$producto]);
    }

    public function noticias()
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        return view('pages.productos',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats]);
    }

    public function contacto()
    {
        $pro_cats = DB::table('products_cat')->get()
        ->where('pro_cat_con','=','1');
        $ser_cats = DB::table('services_cat')->get()
        ->where('ser_cat_con','=','1');
        return view('pages.contacto',['pro_cats'=>$pro_cats, 'ser_cats'=>$ser_cats]);
    }

    public function login()
    {
        return view('home');
    }
}
