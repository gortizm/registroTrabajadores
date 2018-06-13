@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="pull-left">
						<h3>Lista Trabajadores</h3>
					</div>

					<div class="pull-right">
						<div class="btn-group">
							<a href="{{ route('final.create') }}" class="btn btn-info" >Añadir trabajador</a>
						</div>
					</div>

					<div class="table-container">
						@if($trabajadores->isNotEmpty())
							<table id="mytable" class="table table-bordred table-striped">
								<thead>
									<th>tipo</th>
									<th>identificacion</th>
									<th>Pnombre</th>
									<th>Papellido</th>
									<th>Sapellido</th>
									<th>sexo</th>
									<th>nacimiento</th>
									<th>estado</th>
									<th>ciudad</th>
									<th>telefonoF</th>
									<th>telefonoC</th>
									<th>Correo</th>
									<th>Cargo</th>
									<th>inicio</th>
									<th>Hdiarias</th>
									<th>mes</th>
									<th>Salario</th>
									<th>comisiones</th>
								</thead>

								<tbody>
									@foreach($trabajadores as $trabajador)
										<tr>
											<td><?php echo e($trabajador->tipo); ?></td>
											<td><?php echo e($trabajador->identificacion); ?></td>
											<td><?php echo e($trabajador->Pnombre); ?></td>
											<td><?php echo e($trabajador->Papellido); ?></td>
											<td><?php echo e($trabajador->Sapellido); ?></td>
											<td><?php echo e($trabajador->sexo); ?></td>
											<td><?php echo e($trabajador->nacimiento); ?></td>
											<td><?php echo e($trabajador->estado); ?></td>
											<td><?php echo e($trabajador->ciudad); ?></td>
											<td><?php echo e($trabajador->telefonoF); ?></td>
											<td><?php echo e($trabajador->telefonoC); ?></td>
											<td><?php echo e($trabajador->correo); ?></td>
											<td><?php echo e($trabajador->cargo); ?></td>
											<td><?php echo e($trabajador->inicio); ?></td>
											<td><?php echo e($trabajador->Hdiarias); ?></td>
											<td><?php echo e($trabajador->mes); ?></td>
											<td><?php echo e($trabajador->salario); ?></td>
											<td><?php echo e($trabajador->comisiones); ?></td>
											<td>
												<a class="btn btn-primary btn-xs" href="{{route('editar', ['id'=> $trabajador->id])}}">
													<span class="glyphicon glyphicon-pencil"></span>
												</a>
											</td>
											<td>
												<form action="{{action('finalController@destroy', $trabajador->id)}}" method="post">
													{{csrf_field()}}
													{{method_field('DELETE')}}
													<button class="btn btn-danger btn-xs" type="submit">
														<span class="glyphicon glyphicontrash"></span>
													</button>
												</form>	
											</td>
										</tr>
									@endforeach
								</tbody>	
							</table>
						@else
							<div class="alert alert-warning" role="alert">
								No hay trabajadores creados
							</div>
						@endif	
					</div>
					<div class="table-responsive">
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>								


@endsection
