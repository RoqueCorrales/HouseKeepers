<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comentario;
use Image;
use Illuminate\Support\Facades\DB; 

class EmpleadaController extends Controller
{
    public function search(){
	
		$this->load->view('empleadas');
	} 
    
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
    public function create()
    {
        //
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
          $empleada = User::findOrFail($id);
        

        $comentarios = User
        ::join('comentarios', 'users.id', '=', 'comentarios.user_id_receive')
        ->where('user_id_receive', '=', $id) 
        ->select('users.nombre', 'users.apellido', 'users.image', 'comentarios.user_id_receive','comentarios.user_id', 'comentarios.comentario','comentarios.ingreso','comentarios.id')
        ->orderBy('comentarios.id','DESC')
        ->getQuery() 
        ->get();

        return view('perfil',compact('empleada','comentarios'));
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
    public function update(Request $data, $id)
    {
        $hos=0;
        $valor =0;
        $empleada = User::findOrFail($id);
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

 

              
   
  



   // print_r($data);die;
    
          $empleada->nombre = $data['nombre'];
          $empleada->apellido = $data['apellido'];
          
          $empleada->email=$data['email'];
          $empleada->edad =$data['edad'];
          $empleada->telefono = $data['telefono'];
          $empleada->empleada=$data['empleada'];
          $empleada->hospedaje = $data['hospedaje'];           
          $empleada->direccion = $data['direccion'];           
          $empleada->precio = $data['precio'];
          $empleada->ingreso=$data['ingreso'];
          $empleada->estudio=$data['estudio'];
          


          $empleada->save();

          return redirect()->back();
      
   }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::destroy($id);

    }

    public function update_avatar(Request $request, $id){

    	// Handle the user upload of avatar
        $empleada = User::findOrFail($id);
    	if($request->hasFile('image')){
            
    		$avatar = $request->file('image');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		
    		$empleada->image = $filename;
    		$empleada->save();
    	}
 
 //   return view('perfil',compact('empleada'));

 
 return redirect()->back();
 ;

    
}
 public function top(){

 
    $empleadas= User::where('empleada', '1')
    ->orderBy('puntos','DESC')
    ->take(3)->get();

    return view('top',compact('empleadas'));


  
 }





    public function selectAll()
    {
        $empleadas = User::where('empleada', '1')->get();
        
        return view('vista',compact('empleadas'));

    }

    public function buscar(Request $request)
    {
        $busqueda = $request['buscar'];

        if(empty($request['buscar'])){
            
            $empleadas = User::where('empleada', '1')
            ->where('activa', '1')->get(); 
        }else{
        
        $empleadas = User::where('activa', '=','1')
        ->where('empleada', '=','1')
         ->where('nombre','=',$busqueda)
        ->orwhere('estudio','=' ,$busqueda)
        ->orwhere('direccion','=',$busqueda)
       
        
        
        
        ->get();
        }
        

       // if($empleadas->isEmpty()  ){
           
          //  $empleadas = User::where('empleada', '1')
        //     ->where('activa', '1')->get(); 
       // }

     
        
        return view('vista',compact('empleadas'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfile($id)
    {
       
          $empleada = User::where('id',$id)->get();
         // $comentarios = Comentario::where('user_id_receive', $id)->get();
       //   $query = ('SELECT u.nombre, u.apellido,u.image, c.comentario FROM
        //   users u, comentarios c WHERE u.id =?');
                   //$res=DB::select($query);
                     $comentarios = User
                     ::join('comentarios', 'users.id', '=', 'comentarios.user_id_receive')
                     ->where('user_id_receive', '=', $id) 
                     ->select('users.nombre', 'users.apellido', 'users.image', 'comentarios.user_id_receive','comentarios.user_id', 'comentarios.comentario','comentarios.ingreso','comentarios.id')
                     ->orderBy('comentarios.id','DESC')
                     ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                     ->get();
                 
          //print_r($result);die;
        return view('housekeepers',compact('empleada','comentarios'));
    }

}
