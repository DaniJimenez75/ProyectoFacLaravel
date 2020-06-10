<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">





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
      <a class="nav-link" href="{{url('/homeTrabajadores')}}">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/clientesTrabajadores')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/facturasTrabajadores')}}">Facturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/pedidosTrabajadores')}}">Pedidos</a>
      </li>

    </ul>
  </div>
</nav>
<h1 style="text-align:center">Facturas</h1>
<button type="button" class="btn btn-success"><a style="color:white; text-decoration: none" href="{{url('/facturas/formAgregarFactura')}}"> Agregar Cliente</a></button>
<br>
<br>
<div class="table-responsive">
  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">idFactura</th>
      <th scope="col">fecha</th>
      <th scope="col">descripcion</th>
      <th scope="col">precio</th>
      <th scope="col">idCliente</th>


    </tr>
  </thead>
  <tbody>
@foreach($facturas as $factura) 
<tr>
<th scope='row'>{{$factura->idFactura}}</th>
<td>{{$factura->fecha}}</td>
<td>{{$factura->descripcion}}</td>
<td>{{$factura->precio}}</td>
<td>{{$factura->idCliente}}</td>
<td><button type="button" class="btn btn-primary"><a style="color:white; text-decoration: none" href="{{url('/facturas/formEditarFactura',$factura->idFactura)}}">Editar</a></button></td>
<td><button type="button" class="btn btn-danger"><a style="color:white; text-decoration: none" href="{{url('/facturas/eliminarFactura',$factura->idFactura)}}">Eliminar</a></button></td>


        


@endforeach
</tr>

</tbody>
@if(session('status'))
	  {{session('status')}}
    @endif
</table>
</body>
</html>