<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
       protected $fillable = [
        'nombre' ,'apellido', 'email', 'edad' , 'telefono' ,  'hospedaje' ,  'empleada','direccion', 'precio', 'password','ingreso','image',
        'activa','estudio',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
