@extends('layoutusuario')

@section('content')
<div class="container">
<form method="POST" action="{{ route('empleats.update', $empleats->id) }}">
@csrf <!--token-->
@method('PUT') <!--modifica el método del formulario, ya que no admite PUT-->
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Edicción trabajador</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Nombre</label>
      <input name=name type="text" class="form-control" id="inputname" placeholder="Nombre" value="{{ old('name', $empleats->name) }}">
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlastname">Apellidos</label>
      <input name=last_name type="text" class="form-control" id="inputlastaname" placeholder="Apellidos" value="{{ old('last_name', $empleats->last_name) }}">
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input name=Email type="Email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('Email', $empleats->Email) }}">
    @error('Email')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="inputPhone" placeholder="Teléfono" value="{{ old('phone', $empleats->phone) }}">
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputJob">Job</label>
      <input name=job type="text" class="form-control" id="inputJob" placeholder="Job" value="{{ old('job', $empleats->job) }}">

    @error('job')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</br>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection