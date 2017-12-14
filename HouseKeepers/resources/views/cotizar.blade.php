@extends('layouts.app')

@section('content')


   <div class="container" id= "contenedorCotizar">
    <div class="row">
  <div class="col-md-12">

<div class="panel" >
 <form align="center"   method="POST" action="{{route('calcular.show',$empleada[0]->id )}}" >
                 {{ csrf_field() }}
                    <h2 class="align-center"><strong>Cotiza sin cargo</strong></h2>

                            <label for="telefono" >Con cama? </label>

                            <br>
                                <input id="checkboxEmpleada" type="checkbox" name="SeQueda"   checked="checked">SI<br>


                    <div class="row">
                        <div class="col-sm-12">
                            <p class="align-center" id="textEligeDias">Elige el/los días</p>
                  
                   @if(in_array("lunes",$array))    
                   
                          <label style="display:none;"><input id="lunes" type="checkbox"   name="lunes" value="1">Lunes </label>
                        @else
                        
                    <label><input id="lunes" type="checkbox" name="lunes" value="1">Lunes </label>
                   @endif
                   
                    @if(in_array("martes",$array))
                     <label style="display:none;"><input id="martes" type="checkbox" name="martes" value="1">Martes </label>
@else
                     <label ><input id="martes" type="checkbox" name="martes" value="1">Martes </label>
@endif
                      @if(in_array("miercoles",$array))
                      <label style="display:none;"><input id="miercoles"type="checkbox" name="miercoles" value="1">Miercoles </label>
@else
                      <label ><input id="miercoles"type="checkbox" name="miercoles" value="1">Miercoles </label>
@endif

                       @if(in_array("jueves",$array))
                       <label style="display:none;"><input id="jueves" type="checkbox" name="jueves" value="1">Jueves </label>
@else
                       <label ><input id="jueves" type="checkbox" name="jueves" value="1">Jueves </label>
@endif

                        @if(in_array("viernes",$array))
                        <label style="display:none;"><input id="viernes" type="checkbox" name="viernes" value="1">Viernes </label>
@else
                        <label><input id="viernes" type="checkbox" name="viernes" value="1">Viernes </label>
@endif
                         @if(in_array("sabado",$array))
                         <label style="display:none;"><input id="sabado" type="checkbox" name="sabado" value="1">Sabado </label>
@else
                         <label ><input id="sabado" type="checkbox" name="sabado" value="1">Sabado </label>
@endif

                          @if(in_array("domingo",$array))
                          <label style="display:none;"><input id="domingo" type="checkbox" name="domingo" value="1">Domingo </label>
@else                      
                          <label ><input id="domingo" type="checkbox" name="domingo" value="1">Domingo </label>
@endif


                          

                          <br>
                           <br>
                            
                            <div id="detalles_servicio" >
                                
                                <p class="align-center" id="textEligeDias">Detalles del servicio (opcional)</p>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label><input type="checkbox" name="infantes" value="1">Cuidado de infantes. </label>
                                    </div>
                                    <div class="col-xs-12">
                                       <label><input type="checkbox" name="adultos" value="1">Cuidado de adultos mayores. </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

  <div class="row">
                           <div class="col-md-4 col-md-offset-4">
                
                            <p class="align-center">
                                Horario de inicio
                              </p>


                          

        

             

                  
                        <div class="form-group">
                            <label for="date">Fecha Inicio</label>
                             <input type="date" class="form-control datepicker" name="dateInicio" required>
                             
                        </div>
                      <div class="form-group">
                            <label for="date">Fecha Finalizacion</label>
                             <input type="date" class="form-control datepicker" name="dateFinalizacion" required>
                             
                        </div>

                </div>
               
            </div>



                                <div class="row" id="_address">
                        <div class="col-md-4 col-md-offset-4">
                            <p class="align-center">
                                En dónde se realizará
                            </p>
                            <input type="text" class="form-control" name="lugar" required>
                        </div>
                    </div>

                                         
                    

              



<br>
<br>



            <div>
              <!-- Trigger the modal with a button -->
              <button id="botonCotizar" style="display:none; margin:auto;"type="submit" class="btn btn-info btn-sm" >Cotizar Empleada</button>
               <?php if(!isset($monto)){
                   $monto =0;
               }?>
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Empleada cotizacion</h4>
                     
                    </div>
                    <div class="modal-body">
                      
                    {{$monto}}


                     

                      <br>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Contratar</button>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <br>

<br>
<br>
</div>




<br>
<br>
                
</form>


<br>
<br>



</div>









<br>
<br>








            </div>
            
          </div>
          <br>
          <br>
        </div>
        











@endsection


@section('script')
<script>
$('#lunes').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#martes').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#miercoles').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#jueves').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#viernes').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#sabado').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
    
$('#domingo').change(function() {
        if($(this).is(":checked")) {
        $('#botonCotizar').css('display','block'); 
       

        }
    });
</script>



@endsection