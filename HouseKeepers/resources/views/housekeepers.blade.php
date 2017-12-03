@extends('layouts.app')

@section('content')


 <div class="container">
<div class="row">

      <div class="col-md-12 text-center ">
      
        <div class="panel panel-default">
          <div class="userprofile social ">
          
          <br>
            <h2 style="float:center;">{{ $empleada[0]->nombre }} </h2>
             <img src="/uploads/avatars/{{ $empleada[0]->image }}" style="width:100px; height:100px; float:center; border-radius:50%; "/>
           
           
            <br>
            
           </div>
           <br> 
        </div>
      </div
       <br>
      <!-- /.col-md-12 -->
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Informacion Personal</h1>
            
       
          
            <h1 class="small">Telefono : {{ $empleada[0]->telefono }}</h1>
            <h1 class="small">Correo : {{ $empleada[0]->email }} </h1>
            <h1 class="small">Procedencia : {{ $empleada[0]->direccion}} </h1>
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
            <h1 class="page-header small">Contratar</h1>
            <a type="button" href="{{ route('cotizar.show',$empleada[0]->id)}}" class="btn btn-success btn-sm">Contratar</a>
					              <!-- Trigger the modal with a button -->
              <button id="mensaje" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Nuevo Mensaje</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Nuevo Mensaje</h4>
                      
                    </div>
                    <div class="modal-body">
                  
                 <form method="POST" action="{{ route('message.save')}}">
              {{ csrf_field() }} 
                <textarea class="form-control" name="mensaje" placeholder="Que opinas de mis servicios?"></textarea>
            <textarea class="form-control" style="display:none;"  name="idUser">{{auth()->user()->id }}</textarea>  
                <textarea class="form-control" style="display:none;"  name="idEmpleada">{{$empleada[0]->id}}</textarea> 
                <br>
                <button type="submit" class="btn btn-success pull-right"> Compartir</button>
              </form>

<br>
<br>
                    </div>
                    
                  </div>

                </div>
              </div>

            </div>
            <br>
         
         
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">
        <div class="panel panel-default">
          <div class="panel-body">
            
              <form method="POST" action="">
              {{ csrf_field() }} 
                <textarea class="form-control" name="comentario" placeholder="Que opinas de mis servicios?"></textarea>
            <textarea class="form-control" style="display:none;"  name="idUser">{{auth()->user()->id }}</textarea>  
                <textarea class="form-control" style="display:none;"  name="idEmpleada">{{$empleada[0]->id}}</textarea> 
                <br>
               
                <button type="submit" class="btn btn-success pull-right"> Compartir</button>
              </form>
           
            <!-- Status Upload  --> 
          </div>
        </div>
        <?php 
				if (!$comentarios->isEmpty()) {
					foreach($comentarios as $row)
					{ ?>
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
              <div class="media-left"> <a href=""> <img src="/uploads/avatars/{{ $row->image }}" style="width:100px; height:100px; float:center; border-radius:50%; "/ alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">{{$row->nombre }} {{$row->apellido}}<br>
                  <small><i class="fa fa-clock-o"></i> <?php echo"$row->ingreso"?></small> </h4>
                <p><?php echo"$row->comentario"?> </p>

            
              </div>
            </div>
          </div>
        
        
       
       

        </div>
      

      </div>
        <br>
      <?php }
				}?> 
      </div>
    </div>
</div>
<br>
<br>
<br>
 </div>
 
@endsection

 