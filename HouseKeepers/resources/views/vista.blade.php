@extends('layouts.app')




@section('content')
		
<div class="container">
	<div class="row">
<?php 
				if (!$empleadas->isEmpty()) {
					foreach($empleadas as $row)
					{ ?>

		<div class="col-lg-3 col-sm-6">
	
	
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="">
                </div>
                <div class="info">
                    <div class="title">

					 <img src="/uploads/avatars/{{ $row->image }}" style="width:100px; height:100px; float:center; border-radius:50%; "/>
           <br>
                        <a>{{$row->nombre}} {{$row->apellido}}</a>
                    </div>
                    <div class="desc"><span class="glyphicon glyphicon glyphicon-home"></span> {{$row->direccion}}</div>
                    <div class="desc"><span class="glyphicon glyphicon glyphicon-envelope" ></span> {{$row->email}}</div>
                    <div class="desc"><span class="glyphicon 	glyphicon glyphicon-earphone" ></span> {{$row->telefono}}</div>
                </div>
				 @if (Auth::guest())


				  @else
               
                    <a class="btn btn-primary  btn-sm" href="{{ route('housekeepers.show',$row->id ) }}">VER
                       
                    </a>
                   
                   
                   
               
				@endif
            </div>
	


        </div>
		<?php }
				}else{ ?>
					
						<h1>No hay registros</h1>
				
			<?php }
			?>

	</div>
</div>

@endsection