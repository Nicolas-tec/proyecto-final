<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function create(){
        return view('registrar');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'rol' => 'required',
            'edad' => 'required',
            'correo' => 'required',
            'clave' => 'required',
        ]);
        $user = new User();
        $user->nombre = $request->nombre;
        $user->rol = $request->rol;
        $user->edad = $request->edad;
        $user->correo = $request->correo;
        $user->clave = $request->clave;
        $user->save();
        return redirect('/diario')->with('success', '¡Registro exitoso!');
    }
    
    
}
