
@extends('layouts.app')

@section('content')

    <div class="container-fluid" style="background-color:#e8e8e8">
        <div class="container container-pad" id="property-listings">
            
            <div class="row">
              <div class="col-md-12">
               
                <p>HELPERS, te facilitan tu vida.</p>
              </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6"> 
 <?php 

                if (!Empty($horarios)) {
					foreach($horarios as $row)
					{ ?>

                                <?php
                                 $cont =0;
 $des ="";
                                if($row->lunes ==1){
                                  $cont =1;
                                  
                                 $des = "Lunes"; 
                                }
                                if($row->martes ==1){
                                  $cont =$cont+1;
                                  
                                 $des = $des . " Martes"; 
                                   } 
                                if($row->miercoles ==1){
                                  $cont =$cont+1;
                                  
                                 $des = $des ." Miercoles" ;
                                    }
                                if($row->jueves ==1){
                                  $cont =$cont+1;
                                
                                 $des = $des . " Jueves" ;
                                 }
                                if($row->viernes ==1){
                                  $cont =$cont+1;
                                  
                                 $des = $des ." viernes";
                                }
                                if($row->sabado ==1){
                                  $cont =$cont+1;
                                  
                                  $des = $des . " sabado"; 
                                }
                                if($row->domingo ==1){
                                  $cont =$cont+1;
                                  
                                 $des = $des ." Domingo";   
  }
                                ?>
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media">
                            <a class="pull-left" href="#" target="_parent">
                            <img alt="image" class="img-responsive" src="/uploads/avatars/logo.png" ></a>

                            <div class="clearfix visible-sm"></div>

                            <div class="media-body fnt-smaller">
                                <a href="#" target="_parent"></a>

                                <h4 class="media-heading">
                                  <a href="#" target="_parent">${{$row->precio}} <small class="pull-right">{{auth()->user()->nombre}}</small></a></h4>


                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>Fecha Inicio: {{$row->fechainicio}}</li>

                                    <li style="list-style: none">|</li>

                                    <li>Fecha Fin: {{$row->fechafin}}</li>

                                   
                                </ul>

                                <p class="hidden-xs">{{$row->descripcion}}</p><span class="fnt-smaller fnt-lighter fnt-arial">Dias: {{$des}}</span>
                               </div>
                               
                                <a href="{{ route('housekeepers.show',$row->user_id_contratista ) }}" target=""> <small class="pull-right">VER CONTRATISTA</small></a></h4>
                               @if(auth()->user()->empleada ==0)
                               
                              
                               
  
  <!-- Trigger the modal with a button -->
  <a type="button" class="" id="botoncalificar" data-toggle="modal" data-target="#myModal" href="" target=""> <small class="pull-left">CALIFICAR</small></a></h4>
  @endif 
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
 <form class="form-horizontal" method="POST" action="{{ route('tra.calificar',$row->id) }}" >
 
  {{ csrf_field() }} 
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                      <h4 class="modal-title" style="text-align:center;">HELPERS</h4>
                   
                    </div>
                    @if($row->puntos == 0)
                    <div class="modal-body">
                      
                  <p>Califica a tu empleada por el trabajo realizado y con ello premiarle su esfuerzo</p>
                  <div class="col-md-6">
                  <input type="number" style="text-align:center;" name="calificacion" id="cantidad" min="1" max="100"></input>
</div>
                      </br>
                      </br>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="submit" align="center" id="botoncalificar" class="btn btn-success" >Calificar</button>
                    </div>
                    @else
                     <div class="modal-body">
                       <p>Trabajo anteriormente calificado.</p>
                    </div>
                    @endif
                  </div>
                  </form>

                </div>
              </div>

            </div>
            <br>
                        </div>
                    </div><!-- End Listing-->



 <br>
      <?php }
				}?> 

                </div>

              
            </div><!-- End row -->
        </div><!-- End container -->
    </div>
@endsection


