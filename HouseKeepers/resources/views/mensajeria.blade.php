
@extends('layouts.app')

@section('content')


<div class="container">
  <div class="title">Mensajes</div>

</div>

<div class="container">
    <div class="row">

      <div class="col-sm-6 col-md-6">
       <?php 
				if (!$mensajes->isEmpty()) {
					foreach($mensajes as $row)
					{ ?>
            <div class="alert-message alert-message-info">
                <h4>
                    {{$row->nombre}} {{$row->apellido}}</h4>
                <p>
                  {{$row->message}}<br>
                  
                    <a href="{{route('message.del',$row->id)}}">Eliminar</a>
                    </p>
            </div>
             <?php }
				}else{ ?> 
<h4>
                    NO TIENES MENSAJES</h4>

                    <?php } ?>
        </div>


    
        </div>
        </div>

@endsection
