@extends('layouts.app')

@section('content')
 <div class="container">
<div class="row">

      <div class="col-md-12 text-center ">
      
        <div class="panel panel-default">
          <div class="userprofile social ">
        
          <br>
            <h2 style="float:center;">{{ $empleada->nombre }} </h2>
             <img src="/uploads/avatars/{{ $empleada->image }}" style="width:100px; height:100px; float:center; border-radius:50%; "/>
           
            <form enctype="multipart/form-data" href="{{ route('perfil.update',auth()->user()->id) }}" method="POST">
            <br>
                <label>Actualizar Foto</label>
                <input type="file" name="image"  id="avatarFile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class=" btn btn-sm btn-primary">
                
                
            </form>
            <br>
            
           </div>
           
        </div>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Informacion Personal</h1>
            
       
          
            <h1 class="small">Telefono : {{ $empleada->telefono }}</h1>
            <h1 class="small">Correo : {{ $empleada->email }} </h1>
            <h1 class="small">Procedencia : {{ $empleada->direccion}} </h1>
             <h1 class="small">Calificaciones : 100</h1>
              
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Estudios Realizados</h1>
            <p class="page-subtitle small">BiolOga MARINA.

            </p>
          </div>
          <div class="col-md-12">
          
          </div>
          <div class="clearfix"></div>
        </div>
       
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Calificaciones</h1>
            <p class="page-subtitle small">Exito de mes</p>
          </div>
         
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">
        <div class="panel panel-default">
          <div class="panel-body">
            
              <form method="POST" action="">
                <textarea class="form-control" name="comentario" placeholder="Que opinas de mis productos?"></textarea>
                <br>
               
                <button type="submit" class="btn btn-success pull-right"> Compartir</button>
              </form>
           
            <!-- Status Upload  --> 
          </div>
        </div>
        <div class="panel panel-default"> 
        <div class="panel-body">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Eliminar</a></li>
              <li><a href="javascript:void(0)">Modificar</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href=""> <img src="https://bootdey.com/img/Content/avatar/avatar3.png"style="width:100px; height:100px; float:center; border-radius:50%; "/ alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>

              
              </div>
            </div>
          </div>
        
        
       
       

        </div>
       
      </div> 
      </div>
    </div>
</div>
 
 
 
@endsection

 