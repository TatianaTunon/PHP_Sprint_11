@extends('layoutusuario')

@section('content')
<div class="container">
<form method="POST" action="{{ route('empleats.store') }}">
@csrf <!--token-->
<h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nuevo trabajador</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name') }}"> <!--importante old para que se guarde la información que es correcta -->
    </div>
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlastname">Apellidos</label>
      <input name=last_name type="text" class="form-control" id="inputlastaname" placeholder="Apellidos" value="{{ old('last_name') }}">
    </div>
</div>
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input name=email type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('email') }}">
    </div>
  </div>
    @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPhone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="inputPhone" placeholder="Teléfono" value="{{ old('phone') }}">
    </div>
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputJob">Job</label>
      <input name=job type="text" class="form-control" id="inputJob" placeholder="Job" value="{{ old('job') }}">
    </div>
    @error('job')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

@endsection