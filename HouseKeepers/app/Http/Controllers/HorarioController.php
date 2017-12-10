<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Horario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use  Carbon\Carbon;
class HorarioController extends Controller
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
    public function create(array $data)
    {
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
      Horario::create($request->all());
      return view('exitosa');
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
        return view('cotizar',compact('empleada'));
    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
    {
        $horarios = Horario::where('user_id',$id)
        ->orwhere('user_id_contratista','=' ,$id)
        ->orderBy('id','DESC')->get();
       //print_r($horario);die;
        return view('trabajo',compact('horarios'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function calificar(Request $request , $id)
    {
        $horario = Horario::findOrFail($id);
        $calificacion = $request->input('calificacion');
        if($horario->puntos >= 1){
            return redirect()->back()->with('alert', 'Trabajo Ya calificado.');
        }else{

        
        $horario->puntos =$calificacion;
        $horario->save();

        $empleada =User::findOrFail($horario->user_id);
        $puntos = $empleada->puntos;
        $empleada->puntos = $puntos +$calificacion;
        $empleada->save();
        return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
    public function calcular (Request $request, $id)
    {
 $lunes =0;
 $martes =0;
 $miercoles =0;
 $jueves =0;
 $viernes=0;
 $sabado =0;
 $domingo=0;
 $hospedaje=0;
 $descripcion1="";
 $totaldias=0;



        if (isset($request['SeQueda'])) {
             if($request['SeQueda']=='on'){
                         $descripcion1 ="Empleada debe quedarse";
                     
                         }
              }

              if($request['infantes']==1){
                  $descripcion1 =$descripcion1 . ", debe estar al cuidado de infantes";
              }
              if($request['adultos']==1){
                $descripcion1 =$descripcion1 .", debe estar al cuidado de adultos";
            }

            $descripcion1 = $descripcion1 ." en ". $request['lugar'].".";

            if($request['lunes']==1){
                $lunes =1;
                $totaldias =1;
            }
    
            if($request['martes']==1){
                $martes =1;
                $totaldias=$totaldias +1;
            }
       
            if($request['miercoles']==1){
                $miercoles =1;
                $totaldias=$totaldias +1;
            }
        
            if($request['jueves']==1){
                $jueves =1;
                $totaldias=$totaldias +1;
            }
      
            if($request['viernes']==1){
                $viernes =1;
                $totaldias=$totaldias +1;
            }
       
            if($request['sabado']==1){
                $sabado =1;
                $totaldias=$totaldias +1;
            }
       
            if($request['domingo']==1){
                $domingoes =1;
                $totaldias=$totaldias +1;
            }
        

            $empleada = User::where('id',$id)->get();

            $monto=($empleada[0]->precio * $totaldias)*4;

            $horario= new Horario();
              $horario->user_id = $empleada[0]->id;
              $horario->user_id_contratista = auth()->user()->id;
              $horario->lunes = $lunes;
              $horario->martes =$martes;
              $horario->miercoles = $miercoles;
              $horario->jueves = $jueves;
              $horario->viernes =$viernes;
              $horario->sabado =$sabado;
              $horario->domingo =$domingo;
              $horario->fechainicio =$request['dateInicio'];
              $horario->fechafin = $request['dateFinalizacion'];
              $horario->descripcion = $descripcion1;



        
            return view('factura',compact('empleada','monto','horario'));



    }
}
