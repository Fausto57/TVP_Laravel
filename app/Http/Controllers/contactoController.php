<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacto;
use App\Http\Controllers\Controller;

class contactoController extends Controller
{
    public function index(){
        return contacto::all();
    }
    public function store(Request $request){
        $input = $request->all();

        $carrera = contacto::create($input);
        return $carrera;
    }

    public function SaveDatos(Request $request)
    {
        $datos = $request->all();
        echo json_encode($datos);
    
        $usuario = new contacto;
        $usuario->nombre = $datos["nombre"];
        $usuario->ciudad = $datos["ciudad"];
        $usuario->correo = $datos["correo"];
        $usuario->celular = $datos["celular"];
    
        $usuario->save();
    
        return response()->json(['mensaje' => 'Ruta POST ejecutada correctamente']);
    }
    
}
