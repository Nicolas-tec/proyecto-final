<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'usuarios';
    public $timestamps = false;
    protected $password = 'clave';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre', // Asegúrate de que esta columna existe en tu tabla de base de datos
        'rol', // Asegúrate de que esta columna existe en tu tabla de base de datos
        'edad', // Asegúrate de que esta columna existe en tu tabla de base de datos
        'correo', // Asegúrate de que esta columna existe en tu tabla de base de datos
        'clave',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'clave', // Asegúrate de que esta columna existe en tu tabla de base de datos
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setClaveAttribute($clave)
    {
        $this->attributes['clave'] = Hash::make($clave);
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->clave;
    }
}
