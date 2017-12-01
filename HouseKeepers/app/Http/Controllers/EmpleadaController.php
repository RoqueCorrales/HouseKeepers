<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;


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
        return view('perfil',compact('empleada'));
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
 
    return view('perfil',compact('empleada'));

    
}





    public function selectAll()
    {
        $empleadas = User::where('empleada', '1')->get();
       
        return view('vista',compact('empleadas'));

    }
}
