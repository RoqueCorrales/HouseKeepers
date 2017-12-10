@extends('layouts.app')

@section('content')
 <div class="container">
<div class="row">

      <div class="col-md-12 text-center ">
      
        <div class="panel panel-default con2">
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
            <h1 class="page-header small">Informacion Personal <a type="button"  data-toggle="modal" data-target="#myModal"class="pull-right" href="">Actualizar</a></h1>
            
            
       
          
            <h1 class="small">Telefono : {{ $empleada->telefono }}</h1>
            <h1 class="small">Correo : {{ $empleada->email }} </h1>
             @if(auth()->user()->empleada ==1)
            <h1 class="small">Procedencia : {{ $empleada->direccion}} </h1>
             <h1 class="small">Calificaciones : {{ $empleada->puntos}} </h1>
             @endif
              
          </div>
          <div class="clearfix"></div>
        </div>
         @if(auth()->user()->empleada ==1)
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Estudios Realizados</h1>
            <p class="page-subtitle small">{{$empleada->estudio}}

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
        @endif
      </div>



 <div class="col-md-8 col-sm-12 pull-left posttimeline">
        <div class="panel panel-default">
          <div class="panel-body">
            
              <form method="POST" action="{{ route('comentario.save') }}">
              {{ csrf_field() }} 
                <textarea class="form-control" name="comentario" placeholder="Que opinas de mis servicios?"></textarea>
            <textarea class="form-control" style="display:none;"  name="idUser">{{auth()->user()->id }}</textarea>  
                <textarea class="form-control" style="display:none;"  name="idEmpleada">{{$empleada->id}}</textarea> 
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
              <li><a href="{{ route('comentario.delete',$row->id)}}">Eliminar</a></li>
              <li><a href="">Modificar</a></li>
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

    <br>
<br>
<br>
</div>
       <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Actualiza tu cuenta.</h4>
                     
                    </div>
                    <div class="modal-body">
                      


            <div class="panel panel-default">
               

{{$errors}}

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('empleada.update' ,auth()->user()->id) }}" >
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $empleada->nombre }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellido" class="col-md-4 control-label">Apellido </label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido"value="{{  $empleada->apellido }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{  $empleada->email }}"required>
                            </div>
                        </div>

                       

                        

                         


                         

                         <div class="form-group">
                            <label for="edad" class="col-md-4 control-label">Edad </label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad" value="{{  $empleada->edad}}" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label">Telefono </label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control" name="telefono"value="{{  $empleada->telefono }}" required>
                            </div>
                        </div>

                           <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label">Deseas ser empleada? </label>
                          @if( $empleada->empleada == 1)
                            <div class="col-md-6">
                                <input id="checkboxEmpleada" type="checkbox" name="empleada"   checked="checked">SI<br>
                                </div>
                        </div>
                          <div class="form-group"id="direccion">
                            <label for="direccion" class="col-md-4 control-label">Direccion </label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="direccion" value="{{ $empleada->direccion }}">
                            </div>
                        </div>

                            <div class="form-group"id="estudio">
                            <label for="estudio" class="col-md-4 control-label">Estudios </label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="estudio" value="{{ $empleada->estudio }}">
                            </div>
                        </div>

                         <div class="form-group"id="precio" >
                            <label for="precio" class="col-md-4 control-label">Precio </label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="precio"value="{{ $empleada->precio }}" >
                            </div>
                        </div>
                         @if($empleada->hospedaje==1)
                         <div class="form-group" id="hospedaje">
                            <label for="hospedaje" class="col-md-4 control-label">Hospedaje </label>

                            <div class="col-md-6">
                                <input id="checkboxhospedaje" type="checkbox" checked="checked" name="hospedaje">SI<br>
                      
                            </div>
                        </div>
                        @else
                        <div class="form-group" id="hospedaje">
                            <label for="hospedaje" class="col-md-4 control-label">Hospedaje </label>

                            <div class="col-md-6">
                                <input id="checkboxhospedaje" type="checkbox"  name="hospedaje">SI<br>
                      
                            </div>
                        </div>

                        @endif
                         @endif
                          @if( $empleada->empleada == 0)
                            <div class="col-md-6">
                                <input id="checkboxEmpleada" type="checkbox" name="empleada"   checked="checked">SI<br>
                                </div>
                        </div>
                         @endif
                       


                       
                   
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar Cuenta.
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           
     
<br>
<br>


                     
                      <br>
                      <br>
                    </div>
                    
                  </div>

                </div>
              </div>

            </div>
            <br>

 
 
@endsection

 @section('script')
<script>
$('#checkboxEmpleada').change(function() {
        if($(this).is(":checked")) {
        $('#direccion').css('display','block'); 
         $('#precio').css('display','block'); 
          $('#hospedaje').css('display','block'); 
           $('#estudio').css('display','block'); 
         

        }else{
       $('#direccion').css('display','none'); 
         $('#precio').css('display','none'); 
          $('#hospedaje').css('display','none'); 
         $('#estudio').css('display','none');  
             

        }
    });
</script>
@endsection