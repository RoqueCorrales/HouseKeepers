@extends('layouts.app')

@section('content')
 <div class="container">
<div class="row">

      <div class="col-md-12 text-center ">
      
        <div class="panel panel-default">
          <div class="userprofile social ">
          <input type="submit" class=" btn btn-sm" value="Actualizar Cuenta" id="btnActualizar" >
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
            <h1 class="page-header small">Cotizar empleada. </h1>
            
          
          <div class="col-md-12">
            <div class="panel">
              <!--  <form action="/cotiza-tu-empleada-domestica" onsubmit="" id="LimpiezasPreFastAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                />--><input type="hidden" id="backbutton" name="backbutton" value="0">

              <div class="limpieza nodefault container-fluid">
                                   
                    
                    <div id="submit" style="display: block">
                        <center>
                            <!--                            <input type="button" class="btn btn-primary" onclick="return enviar();" value="VER PRECIOS"/>-->
                            <input type="submit" class="btn btn-primary btn-block" value="VER PRECIOS">
                            
                        </center>

                        <br>
                    </div>


                </div>
            </form></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Calificaciones</h1>
            <p class="page-subtitle small">Exito de mes</p>
          </div>
          <div class="col-md-12">
            <div class="memberblock"> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
              <div class="memmbername">Ajay Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Rajesh Sriram</div>
              </a>
              </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="status-upload nopaddingbtm">
              <form method="POST" action="{{ route('comentario.store' , $empleada->id) }}">
                <textarea class="form-control" name="comentario" placeholder="Que opinas de mis productos?"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>
                </ul>
                <button type="submit" class="btn btn-success pull-right"> Compartir</button>
              </form>
            </div>
            <!-- Status Upload  --> 
          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>

                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
        
        
       
       
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Eliminar</a></li>
              <li><a href="javascript:void(0)">Editar</a></li>
            </ul>
          </div>
       </div>
        </div>
       
     
      </div>
    </div>
</div>
 </div>

 
@endsection

 