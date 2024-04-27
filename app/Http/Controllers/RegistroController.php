<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'password' => 'required',
        ]);
        $user = new User();
        $user->nombre = $request->nombre;
        $user->rol = $request->rol;
        $user->edad = $request->edad;
        $user->correo = $request->correo;
        $user->password = Hash::make($request->password); 
        $user->save();
        return redirect('/inicio')->with('success', '¡Registro exitoso!');
    }
    
    
}
