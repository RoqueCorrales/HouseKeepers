@extends('layouts.app')

@section('content')


   <div class="container" id= "contenedorCotizar">
    <div class="row">
  <div class="col-md-12">
            <div class="panel" id= "contenedorSecundarioCotizar">
                <form align="center" action="/cotiza-tu-empleada-domestica" onsubmit="" id="LimpiezasPreFastAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
               
                
                          
                <div class="limpieza nodefault container-fluid">
                    <h2 class="align-center"><strong>Cotiza sin cargo</strong></h2>
<br>
                    <div style="display:block;">

                        <div class="row align-center">
                          <div class="col-md-12">
                             <div class="form-group">
                            <label for="telefono" >Deseas ser empleada? </label>

                            <br>
                                <input id="checkboxEmpleada" type="checkbox" name="empleada"   checked="checked">SI<br>
                                
                        </div>
                          </div>
                       


                        </div>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p class="align-center" id="textEligeDias">Elige el/los días</p>
                            <div class="form-group" id="dias" style="display: block;">
                                <input type="checkbox" id="mondayclass" value="0" onclick="seleccionarDia('monday');" class="css-checkbox" checked="checked">
                                <label for="mondayclass" class="css-label"><span>Lunes</span></label>
                               
                            
                                <br>
                                <input type="checkbox" id="tuesdayclass" value="0" onclick="seleccionarDia('tuesday');" class="css-checkbox">
                                <label for="tuesdayclass" class="css-label"><span>Martes</span></label>
                            
                                <br>
                                <input type="checkbox" id="wednesdayclass" value="0" onclick="seleccionarDia('wednesday');" class="css-checkbox">
                                <label for="wednesdayclass" class="css-label"><span>Miércoles</span></label>
                               
                                <br>
                                <input type="checkbox" id="thursdayclass" value="0" onclick="seleccionarDia('thursday');" class="css-checkbox" checked="checked">
                                <label for="thursdayclass" class="css-label"><span>Jueves</span></label>
                               
                                <br>
                                <input type="checkbox" id="fridayclass" value="0" onclick="seleccionarDia('friday');" class="css-checkbox">
                                <label for="fridayclass" class="css-label"><span>Viernes</span></label>
                               
                                <br>
                                <input type="checkbox" id="saturdayclass" value="0" onclick="seleccionarDia('saturday');" class="css-checkbox">
                                <label for="saturdayclass" class="css-label"><span>Sábado</span></label>
                                
                                <br>
                                <input type="checkbox" id="sundayclass" value="0" onclick="seleccionarDia('sunday');" class="css-checkbox">
                                <label for="sundayclass" class="css-label"> <span>Domingo</span></label>
                                
                            </div>

                          

                            <br>
                            
                            <div id="detalles_servicio" style="display: none;">
                                <br>
                                <br>
                                <p class="align-center" id="textEligeDias">Detalles del servicio (opcional)</p>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="kids" name="kids" value="1" class="css-checkbox">
                                        <label for="kids" class="css-label"> <span>Cuidado de niños</span></label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="eldercare" name="eldercare" value="1" class="css-checkbox">
                                        <label for="eldercare" class="css-label"> <span>Cuidado de adultos mayores</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <!-- <BR class="hidden-xs"> -->
                  
                    <div class="row" id="divHoraInicio" style="display: block;">
                        <div class="col-sm-12">
                            <p class="align-center">
                                Horario de inicio
                                <!-- <li id="span_detalle_pack_x" style="font-size:1em; display:none;"></li> -->
                            </p>
                            <div class="form-group">
                                <select name="horaInicio" id="horaInicio" class="form-control align-center" required="required">
                                    <option value="">Elige un horario</option>
                                    <option value="6">06:00</option>
                                    <option value="7">07:00</option>
                                    <option value="8">08:00</option>
                                    <option value="9">09:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="row" id="_address">
                        <div class="col-sm-12">
                            <p class="align-center">
                                En dónde se realizará
                            </p>
                            <div class="form-group">
                                <select name="data[Job][city_id]" id="city_id" class="form-control align-center" required="required">
<option value="">Elige una ciudad...</option>
<option value="">Alajuela</option>
<option value="">Cuidad Quesada</option>
<option value="">San Jose</option>
<option value="">Puntarenas</option>
<option value="">Limon</option>
<option value="">Guanacaste</option>
</select>                            </div>
                        </div>
                    </div>

                                         
                    
                    <div id="submit" style="display: block">
                        <center>
                         
                   <input type="submit" class="btn btn-primary btn-block" value="COTIZAR" >

     
                        </center>

                        <br>
                    </div>


                </div>
            </form></div>
            </div>
          </div>
          <br>
          <br>
        </div>
        











@endsection
