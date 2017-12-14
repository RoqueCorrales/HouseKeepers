@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>



                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" >
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellido" class="col-md-4 control-label">Apellido </label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido"value="{{ old('apellido') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"required>
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))  
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         


                         

                         <div class="form-group">
                            <label for="edad" class="col-md-4 control-label">Edad </label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad" value="{{ old('edad') }}" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label">Telefono </label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control" name="telefono"value="{{ old('telefono') }}" required>
                            </div>
                        </div>

                           <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label">Deseas ser empleada? </label>

                            <div class="col-md-6">
                                <input id="checkboxEmpleada" type="checkbox" name="empleada"   checked="checked">SI<br>
                                </div>
                        </div>
      
                       


                         <div class="form-group"id="direccion">
                            <label for="direccion" class="col-md-4 control-label">Direccion </label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                            </div>
                        </div>

                            <div class="form-group"id="estudio">
                            <label for="estudio" class="col-md-4 control-label">Estudios </label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="estudio" value="{{ old('estudio') }}">
                            </div>
                        </div>

                         <div class="form-group"id="precio" >
                            <label for="precio" class="col-md-4 control-label">Precio </label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="precio"value="{{ old('precio') }}" >
                            </div>
                        </div>

                         <div class="form-group" id="hospedaje">
                            <label for="hospedaje" class="col-md-4 control-label">Hospedaje </label>

                            <div class="col-md-6">
                                <input id="checkboxhospedaje" type="checkbox" name="hospedaje">SI<br>
                      
                            </div>
                        </div>
                   
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
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



