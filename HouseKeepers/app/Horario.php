<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Horario extends Model
{
    use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
           protected $fillable = [
            'user_id' ,'user_id_contratista', 'precio','puntos','lunes', 'martes','miercoles','jueves','viernes','sabado','domingo' ,'fechainicio','fechafin','descripcion',
        ];
}
