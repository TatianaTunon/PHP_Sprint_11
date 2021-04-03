@extends('layout')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; padding-left: 20;">
  <a class="navbar-brand" href="#">Menú</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route ('empleats.index')}}">Index usuarios/as</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('auth.login')}}">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('auth.registre')}}">Registre</a>
      </li>
    </ul>
  </div>
</nav>