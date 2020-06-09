<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="indexTreballador.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/clientesTrabajadores')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/facturasTrabajadores')}}">Facturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/albaranesTrabajadores')}}">Albaranes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/proveedoresTrabajadores')}}">Proveedores</a>
      </li>

    </ul>
  </div>
</nav>
<h1 style="text-align:center"> Bienvenido Trabajador</h1>
<button type="button" class="btn btn-success"><a style="color:white; text-decoration: none" href="{{url('/trabajador/formAgregarCliente')}}"> Agregar Cliente</a></button>
<br>
<br>
<div class="table-responsive">
  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">idCliente</th>
      <th scope="col">username</th>
      <th scope="col">nombre</th>
      <th scope="col">apellidos</th>
      <th scope="col">email</th>
      <th scope="col">telefono</th>
      <th scope="col">ciudad</th>

    </tr>
  </thead>
  <tbody>
@foreach($clientes as $cliente) 
<tr>
<th scope='row'>{{$cliente->idCliente}}</th>
<td>{{$cliente->username}}</td>
<td>{{$cliente->nombre}}</td>
<td>{{$cliente->apellidos}}</td>
<td>{{$cliente->email}}</td>
<td>{{$cliente->telefono}}</td>
<td>{{$cliente->ciudad}}</td>
<td><button type="button" class="btn btn-primary"><a style="color:white; text-decoration: none" href="{{url('/trabajador/formEditarCliente',$cliente->idCliente)}}">Editar</a></button></td>
<td><button type="button" class="btn btn-danger"><a style="color:white; text-decoration: none" href="{{url('/trabajador/eliminarCliente',$cliente->idCliente)}}">Eliminar</a></button></td>


        


@endforeach
</tr>

</tbody>
@if(session('status'))
	  {{session('status')}}
    @endif
</table>
</body>
</html>