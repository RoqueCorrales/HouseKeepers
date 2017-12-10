
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
					<!-- PRICE ITEM -->
					<div class="panel price panel-blue" >
						<div class="panel-heading arrow_box text-center">
						<h3>Cotizacion Realizada</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>${{$monto}} / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-info"></i> {{$empleada[0]->nombre}} {{$empleada[0]->apellido}}</li>
							<li class="list-group-item"><i class="icon-ok text-info"></i> De: {{$horario->fechainicio}} al {{$horario->fechafin}}</li>
							<li class="list-group-item"><i class="icon-ok text-info"></i> {{$horario->descripcion}}</li>
						</ul>
                        <br>
						<div class="panel-footer">
                         <div class="panel-body">
            
              <form method="POST" action="{{route('guardar.horario')}}">
              {{ csrf_field() }} 
              <textarea class="form-control" style="display:none;"  name="precio">{{ $monto }}</textarea>
                <textarea class="form-control" style="display:none;"  name="user_id">{{ $horario->user_id }}</textarea>  
                 <textarea class="form-control" style="display:none;"  name="user_id_contratista">{{$horario->user_id_contratista }}</textarea>  
                  <textarea class="form-control" style="display:none;"  name="lunes">{{$horario->lunes }}</textarea>  
                   <textarea class="form-control" style="display:none;"  name="martes">{{$horario->martes }}</textarea>  
                    <textarea class="form-control" style="display:none;"  name="miercoles">{{ $horario->miercoles}}</textarea>  
                     <textarea class="form-control" style="display:none;"  name="jueves">{{$horario->jueves}}</textarea>  
                       <textarea class="form-control" style="display:none;"  name="viernes">{{$horario->viernes }}</textarea> 
                         <textarea class="form-control" style="display:none;"  name="sabado">{{$horario->sabado }}</textarea> 
                           <textarea class="form-control" style="display:none;"  name="domingo">{{$horario->domingo }}</textarea> 
                             <textarea class="form-control" style="display:none;"  name="fechainicio">{{ $horario->fechainicio}}</textarea> 
                               <textarea class="form-control" style="display:none;"  name="fechafin">{{$horario->fechafin }}</textarea> 
                <textarea class="form-control" style="display:none;"  name="descripcion">{{$horario->descripcion}}</textarea> 
                <br>
               
                <button type="submit" class="btn btn-success pull-right">CONTRATAR!</button>
                <a class="btn btn-md btn-block btn-warning" href="#">CANCELAR</a>
              </form>
           
           
          </div>
							
                            
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>	
</div>
				
	</div>	
    	
				</div>



                


@endsection