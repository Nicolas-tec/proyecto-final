<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('login');
    }
    
    public function store(Request $request)
    {
        $correo = $request->input('correo');
        $clave = $request->input('clave');
        
        // Retrieve the user by correo
        $user = User::where('correo', $correo)->first();
    
        // Check if the user exists
        if ($user) {
            // Check if the provided password matches the hashed password in the database
            if (Hash::check($clave, $user->clave)) {
                // Attempt to authenticate the user
                if (Auth::login($user)) {
                    return redirect()->route('welcome');
                }
            }
        }
    
        return redirect()->back()->withErrors([
            'correo' => 'Correo o contraseña incorrecta',
        ]);
    }
    
}
