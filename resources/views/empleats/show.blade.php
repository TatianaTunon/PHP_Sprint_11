@extends('layout')
@section('content')

<!DOCTYPE html>

<div class="container">
    <div class="col-md-3 m-4">
        <h1>Usuario: <?php echo ($empleats->idempleats); ?></h1>
        <p>Nombre: <?php echo ($empleats->name); ?></p>
        <p>Apellidos: <?php echo ($empleats->last_name); ?></p>
        <p>Email: <?php echo ($empleats->email); ?></p>
        <p>Teléfono: <?php echo ($empleats->phone); ?></p>
        <p>Puesto: <?php echo ($empleats->job); ?></p>
    
    <div class="row justify-content-center">    
        <a href="{{ route('empleats.index') }}" class="btn btn-lg btn-secondary">Volver al index</a>
    </div>
    </div>
</div>
</html>
