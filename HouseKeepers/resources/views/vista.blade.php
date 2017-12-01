@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">

    <div class="col-md-12 text-center ">
    
    
  
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
                    <th>Ubicacion</th>
                    <th>Telefono</th>
                    <th>Mostrar Empleada</th>
					
				</tr>
			</thead>
			

			<tbody>
				<?php 
				if (!$empleadas->isEmpty()) {
					foreach($empleadas as $row)
					{ ?>
				        <tr>
							<td><?php echo"$row->nombre"?></td>
							<td><?php echo"$row->apellido"?></td>
							<td><?php echo"$row->direccion"?></td>
							<td><?php echo"$row->telefono"?></td>
						
						 @if (Auth::guest())
							<td colspan="5">No permitido</td> 
								  @else
								
						<td> <a href="{{ route('housekeepers.show',$row->id ) }}" class="btn btn-sm btn-warning">Show</a></td>
							  
				        </tr>
						@endif
					<?php }
				}else{ ?>
					<tr>
						<td colspan="4">No hay registros</td>
					</tr>
			<?php }
			?>	
			</tbody>
				 
				
		</table>
  

  </div>

 </div>
 </div
 
 
 >
@endsection