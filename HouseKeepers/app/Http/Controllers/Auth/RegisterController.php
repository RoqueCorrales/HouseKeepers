<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use  Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
     return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'edad' => 'required|integer',
            'password' => 'required|string|min:6|confirmed',
            'telefono' => 'required|integer',
            'image' => 'image',
            
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $hos=0;
         $valor =0;
        if (isset($data['empleada'])) {

           if($data['empleada']=='on'){
             $valor= 1;
             if (isset($data['hospedaje'])) {
           if($data['hospedaje']=='on'){
             $hos= 1;
           }
             }

          }
           
           
        }
         $data['empleada']=$valor;
        $data['hospedaje']=$hos;

  
         $date = Carbon::now();
 
       $date->toDateString();  
               
    
    $data['ingreso']=$date;



    // print_r($data);die;
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'edad' => $data['edad'],
            'telefono' => $data['telefono'],
            'empleada'=>$data['empleada'],
            'hospedaje' => $data['hospedaje'],            
            'direccion' => $data['direccion'],            
            'precio' => $data['precio'],
            'ingreso'=>$data['ingreso'],
            'estudio'=>$data['estudio']
           


            
        ]);
    }
}
