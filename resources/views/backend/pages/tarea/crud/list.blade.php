
<div class="row">
	<div class="col-3">

		@if ($form == 'create')
			{{  Form::open(['url' => 'store_tarea','autocomplete'=>'off', 'method' => 'POST', 'files' => true]) }}
			<h5>Listado Tareas</h5>
			
		@else
			{{  Form::open(['url' => ['update_tarea',$tarea->id_tarea],'autocomplete'=>'off', 'method' => 'POST', 'files' => true]) }}
			<h5>Editar ARL</h5>			
		@endif

		{!! Form::token() !!}
			@include('backend.pages.tarea.crud.form')
			<button type="submit" class="btn btn-primary"><i class="fas fa-file-export"></i>Guardar</button>
		 {!!Form::close()!!}
	</div>

	<div class="col-9">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Autor</th>
						<th>Descripción</th>
						<th>Fecha Inicio</th>
						<th>Estado</th>
						<th>Fecha fin</th>
						<th colspan="2">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tareas as $t)
					   <tr>
					   	    <td>{{ $t->str_autor }}</td>
					   	    <td>{{ $t->str_descripcion }}</td>			   	    
					   	    <td>{{ $t->dt_fecha_inicio }}</td>			   	    
					   	    <td>{{ $t->str_estado }}%</td>			   	    
					   	    <td>{{ $t->dt_fecha_fin }}</td>			   	    
					   	    <td>
					   	   	    <a href="{{ URL::action( [App\Http\Controllers\Tarea\TareaController::class, 'edit'], ['id' => $t->id_tarea]) }}" class="btn btn-warning">
					   	   	    	<i class="ri-edit-line"></i> Editar
					   	   	    </a>
					   	   	     <a href="{{ URL::action( [App\Http\Controllers\Tarea\TareaController::class, 'destroy'], ['id' => $t->id_tarea]) }}" class="btn btn-danger">
					   	   	    	<i class="ri-delete-bin-2-line"></i> Eliminar
					   	   	    </a>
					   	    </td>
					   </tr>
					@endforeach
				</tbody>
			</table>
		</div>
		{{ $tareas->links() }}
	</div>		
</div>