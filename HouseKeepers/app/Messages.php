<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Messages extends Model
{
    use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
           protected $fillable = [
            'user_id_receive' ,'user_id', 'message', 'ingreso', 
        ];
}
