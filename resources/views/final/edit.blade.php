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
<h3 class="panel-title">Nuevo Trabajador</h3>
</div>
<div class="panel-body">
<div class="table-container">
<form method="POST" action="{{ route('final.update',$final->id) }}" role="form">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name=identificacion" id="identificacion" class="form-control input-sm"
value="{{$final->identificacion}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="nombre" id="nombre" class="form-control input-sm"
value="{{$final->nombre}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Papellido" id="Papellido" class="form-control input-sm"
value="{{$final->Papellido}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Sapellido" id="Sapellido" class="form-control input-sm"
value="{{$final->Sapellido}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="correo" id="correo" class="form-control input-sm"
value="{{$final->correo}}">
</div>
</div>
</div>
<div class="form-group">
<textarea name="fijo" class="form-control input-sm"
placeholder="fijo">{{$final->fijo}}</textarea>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="celular" id="celular" class="form-control input-sm"
value="{{$final->celular}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="cargo" id="cargo" class="form-control input-sm"
value="{{$final->cargo}}">
</div>
</div>
</div>
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Actualizar" class="btn btn-success btn-block">
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