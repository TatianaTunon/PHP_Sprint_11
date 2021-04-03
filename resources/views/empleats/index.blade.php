
@extends('layoutusuario')
@section('content')



<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Empleats </title>
 </head>

 <div class="row">
    <div class="col-md-3 m-4">
        <a href="{{ route('empleats.create') }}" class="btn btn-lg btn-primary">Nuevo trabajador</a>
    </div>
</div>
<!-- BOTÓN SEARCH -->

<div class="row">
  <div class="col-md-2 m-4">
    <div class="form-group">
      <form class="form-inline">
        <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar por job" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</div>

<table class="table table-responsive table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empleats as $empleat)
    <tr>
      <th scope="row">{{ $empleat->idempleats }}</th>
      <td>{{ $empleat->name }}</td>
      <td>{{ $empleat->last_name }}</td>
      <td>{{ $empleat->email }}</td>
      <td>{{ $empleat->phone }}</td>
      <td>{{ $empleat->job}}</td>
      <td>
      <div class="btn-group">
        <a href="{{ route('empleats.edit', $empleat->idempleats)}}" class="btn btn-warning">Editar</a>
    
        <form method="POST" action="{{ route('empleats.destroy', $empleat->idempleats )}}">
          @csrf
          @method('DELETE')
          <button type="submit" href="#" class="btn btn-danger">Borrar</button>
        </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-3 m-4">
    <a href="{{ url('/') }}" class="btn btn-lg btn-secondary">Volver a home</a>
    </div>
</div>
</div>
</html>

@endsection