<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Carbon\Carbon;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now();
        
         $date->toDateString();
         $id= auth()->user()->id; 
         $empleada = User::findOrFail($id);
         $empleada->ingreso = $date;
         $empleada->save();
     
        return view('/principal');
    }
}
