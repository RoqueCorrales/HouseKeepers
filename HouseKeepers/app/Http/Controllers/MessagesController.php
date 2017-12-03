<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Carbon\Carbon;
use App\Messages;
use App\User;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $date = Carbon::now();
        
         $date->toDateString(); 
       Messages::create([
         'user_id_receive' => $request->input('idEmpleada'),
         'user_id' =>$request->input('idUser'),
        'message' =>$request->input('mensaje'),
        'ingreso' =>$date
        
           


            
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
               
        $empleada = User::where('id',$id)->get();
        // $comentarios = Comentario::where('user_id_receive', $id)->get();
      //   $query = ('SELECT u.nombre, u.apellido,u.image, c.comentario FROM
       //   users u, comentarios c WHERE u.id =?');
                  //$res=DB::select($query);
                    $mensajes = User
                    ::join('messages', 'users.id', '=', 'messages.user_id_receive')
                    ->where('user_id', '=', $id) 
                    ->select('users.nombre', 'users.apellido', 'users.image', 'messages.message','messages.id','messages.ingreso')
                   
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                    ->get();
                
         //print_r($result);die;
       return view('mensajeria',compact('empleada','mensajes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Messages::destroy($id);  
    }
}
