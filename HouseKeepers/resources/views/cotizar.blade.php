@extends('layouts.app')

@section('content')


   <div class="container" id= "contenedorCotizar">
    <div class="row">
  <div class="col-md-12">
            <div class="panel" id= "contenedorSecundarioCotizar">
                <form action="/cotiza-tu-empleada-domestica" onsubmit="" id="LimpiezasPreFastAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                <input type="hidden" id="backbutton" name="backbutton" value="0">

                <!--                <input type="hidden" id="transportation" name="data[JobDetail][transportation]" value="0"/>-->
                <input type="hidden" id="description" name="data[Job][description]" value="">
                <input type="hidden" id="title" name="data[Job][title]" value="">

                <input type="hidden" name="data[Job][id]" id="job_id" value="">                <input type="hidden" name="data[Job][turno]" id="turno" value="1">
                <div class="limpieza nodefault container-fluid">
                    <h2 class="align-center"><strong>Cotiza sin cargo</strong></h2>

                    <div style="display:block;">

                        <div class="row align-center">
                          <div class="col-md-12">
                            <label class="btn-radio-fastadd">
                                <input type="radio" name="data[Job][subcategory_id]" id="frecuencia_salida" value="8" onclick="clickFrecuenciaSalida();" style="opacity:1;">
                                <div class="button-fastadd badge frequency-text">Con retiro</div>
                            </label>
                            <label class="btn-radio-fastadd">
                              <input type="radio" name="data[Job][subcategory_id]" id="frecuencia_camaadentro" value="7" onclick="clickFrecuenciaCamaAdentro();" style="opacity:1;">
                              <div class="button-fastadd badge frequency-text">Cama adentro</div>
                          </label>
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
                                <input type="hidden" id="monday" name="dias[]" value="1">
                                <input type="hidden" name="data[JobDetail][monday_morning]" id="monday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][monday_afternoon]" id="monday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][monday_night]" id="monday_night" value="0">
                                <br>
                                <input type="checkbox" id="tuesdayclass" value="0" onclick="seleccionarDia('tuesday');" class="css-checkbox">
                                <label for="tuesdayclass" class="css-label"><span>Martes</span></label>
                                <input type="hidden" id="tuesday" name="dias[]" value="0">
                                <input type="hidden" name="data[JobDetail][tuesday_morning]" id="tuesday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][tuesday_afternoon]" id="tuesday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][tuesday_night]" id="tuesday_night" value="0">
                                <br>
                                <input type="checkbox" id="wednesdayclass" value="0" onclick="seleccionarDia('wednesday');" class="css-checkbox">
                                <label for="wednesdayclass" class="css-label"><span>Miércoles</span></label>
                                <input type="hidden" id="wednesday" name="dias[]" value="0">
                                <input type="hidden" name="data[JobDetail][wednesday_morning]" id="wednesday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][wednesday_afternoon]" id="wednesday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][wednesday_night]" id="wednesday_night" value="0">
                                <br>
                                <input type="checkbox" id="thursdayclass" value="0" onclick="seleccionarDia('thursday');" class="css-checkbox" checked="checked">
                                <label for="thursdayclass" class="css-label"><span>Jueves</span></label>
                                <input type="hidden" id="thursday" name="dias[]" value="1">
                                <input type="hidden" name="data[JobDetail][thursday_morning]" id="thursday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][thursday_afternoon]" id="thursday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][thursday_night]" id="thursday_night" value="0">
                                <br>
                                <input type="checkbox" id="fridayclass" value="0" onclick="seleccionarDia('friday');" class="css-checkbox">
                                <label for="fridayclass" class="css-label"><span>Viernes</span></label>
                                <input type="hidden" id="friday" name="dias[]" value="0">
                                <input type="hidden" name="data[JobDetail][friday_morning]" id="friday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][friday_afternoon]" id="friday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][friday_night]" id="friday_night" value="0">
                                <br>
                                <input type="checkbox" id="saturdayclass" value="0" onclick="seleccionarDia('saturday');" class="css-checkbox">
                                <label for="saturdayclass" class="css-label"><span>Sábado</span></label>
                                <input type="hidden" id="saturday" name="dias[]" value="0">
                                <input type="hidden" name="data[JobDetail][saturday_morning]" id="saturday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][saturday_afternoon]" id="saturday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][saturday_night]" id="saturday_night" value="0">
                                <br>
                                <input type="checkbox" id="sundayclass" value="0" onclick="seleccionarDia('sunday');" class="css-checkbox">
                                <label for="sundayclass" class="css-label"> <span>Domingo</span></label>
                                <input type="hidden" id="sunday" name="dias[]" value="0">
                                <input type="hidden" name="data[JobDetail][sunday_morning]" id="sunday_morning" value="0">
                                <input type="hidden" name="data[JobDetail][sunday_afternoon]" id="sunday_afternoon" value="0">
                                <input type="hidden" name="data[JobDetail][sunday_night]" id="sunday_night" value="0">
                            </div>

                            <div class="form-group" id="rango_dias" style="display: none;">
                                <div class="col-xs-12">
                                    <input type="radio" name="rango_dias_radio" id="rango_dias_radio_semana" onclick="clickSemana();" style="opacity:1;"> Lunes a Viernes                                </div>
                                                                    <div class="col-xs-12">
                                        <input type="radio" name="rango_dias_radio" id="rango_dias_radio_semana_larga" onclick="clickSemanaLarga();" style="opacity:1;"> Lunes a Sábados                                    </div>
                                                                <div class="col-xs-12">
                                    <input type="radio" name="rango_dias_radio" id="rango_dias_radio_fin_semana" onclick="clickFinSemana();" style="opacity:1;"> Viernes a Domingos
                                </div>
                            </div>

                            <br>
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
                    <div class="row" id="divDias" style="display: block;">
                        <div class="col-sm-12">
                            <p class="align-center">
                                Horas por día <a id="vs" href="/pages/calculadora_horas" class="various1" data-fancybox-type="iframe" style="text-decoration:none; line-height:1.5em;"><i class="fa fa-question-circle" style="color:#818185;"></i></a>
                                <!-- <li id="span_detalle_pack_x" style="font-size:1em; display:none;"></li> -->
                            </p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon" onclick="stepper('f8_hours','-',3,8);" style="cursor: pointer;">
                                        <input type="button" value="-" class="no-fill no-border no-padding">
                                    </div>
                                    <input class="form-control align-center no-fill" type="number" name="data[Job][hours]" id="f8_hours" min="3" max="8" readonly="readonly" onkeypress="return soloHoras(event,this);" value="4">
                                    <div class="input-group-addon" onclick="stepper('f8_hours','+',3,8);" style="cursor: pointer;">
                                        <input type="button" value="+" class="no-fill no-border no-padding">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
<option value="59">Alajuela</option>
<option value="201">Cuidad Quesada</option>
<option value="1">San Jose</option>
<option value="74">Puntarenas</option>
<option value="73">Limon</option>
<option value="76">Guanacaste</option>
</select>                            </div>
                        </div>
                    </div>

                                            <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="email" id="email_registrese" class="form-control" placeholder="Ingresa tu e-mail" value="" type="email">                                    <span id="suggestion" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    
                    <div id="submit" style="display: block">
                        <center>
                            <input type="submit" class="btn btn-primary btn-block" value="VER PRECIOS" onclick="">
                   <input type="submit" class="btn btn-primary btn-block" value="CONTRATAR" onclick="window.location.href='Valorar.html'">

     
                        </center>

                        <br>
                    </div>


                </div>
            </form></div>
            </div>
          </div>
        </div>
        











@endsection
