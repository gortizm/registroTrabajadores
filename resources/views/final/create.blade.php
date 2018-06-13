@extends('layouts.layout')
@section('content')
<div class="row">
<section class="content">
<div class="col-md-8 col-md-offset-2">
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Error!</strong> Revise los campos obligatorios.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-info">
{{Session::get('success')}}
</div>
@endif
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Nuevo trabajador</h3>
		</div>
	<div class="panel-body">
		<div class="table-container">
			<form method="POST" action="{{ route('final.store') }}" role="form">
			{{ csrf_field() }}
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<input type="text" name="tipo" id="tipo" class="form-control input-sm"
			placeholder="Tipo de documento">

			</div>
		</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="identificacion" id="identificacion" class="form-control input-sm"
placeholder= "Numero de documento">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Pnombre" id="Pnombre" class="form-control input-sm"
placeholder= "Nombre del Trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Papellido" id="Papellido" class="form-control input-sm"
placeholder="Primer apellido del trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Sapellido" id="Sapellido" class="form-control input-sm"
placeholder= "Segundo Apellido">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="sexo" id="sexo" class="form-control input-sm"
placeholder="Sexo">	
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="nacimiento" id="nacimiento" class="form-control input-sm"
placeholder="Fecha de Nacimiento">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="estado" id="estado" class="form-control input-sm"
placeholder= "Estado Civil">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="ciudad" id="ciudad" class="form-control input-sm"
placeholder= "Ciudad de Nacimiento">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="telefonoF" id="telefonoF" class="form-control input-sm"
placeholder="Telefono fijo del trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="telefonoC" id="telefonoC" class="form-control input-sm"
placeholder="Celular del trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="correo" id="correo" class="form-control input-sm"
placeholder="Correo electronico">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="cargo" id="cargo" class="form-control input-sm"
placeholder="cargo del trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="inicio" id="inicio" class="form-control input-sm"
placeholder="Fecha de Inicio">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Hdiarias" id="Hdiarias" class="form-control input-sm"
placeholder="Numero de horas al dia">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="mes" id="mes" class="form-control input-sm"
placeholder="Total horas al mes">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="salario" id="salario" class="form-control input-sm"
placeholder="Salario del trabajador">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="comisiones" id="comisiones" class="form-control input-sm"
placeholder="comisiones">
</div>
</div>
</div>
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Guardar" class="btn btn-success btn-block">
<a href="{{ route('final.index') }}" class="btn btn-info btn-block" >Atrás</a>
</div>
 </div>
 </form>
</div>
</div>
 </div>
</div>
</section>
@endsection