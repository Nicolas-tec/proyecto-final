<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function create(){
        return view('login');
    }
    
    public function store(Request $request)
{
    $credentials = $request->only('correo', 'clave');

    if (Auth::attempt($credentials)) {
        return redirect()->route('diario.index');
    }
    
    return back()->withErrors([
        'message' => 'ACCESO DENEGADO',
    ]);
}
}
