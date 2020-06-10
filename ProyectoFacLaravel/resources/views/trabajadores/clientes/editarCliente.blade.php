<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




</head>
<body>

<form method="POST" action="{{url('/trabajador/editarCliente',$clientes->idCliente)}}">
@csrf

<div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
    <h1 style="text-align:center; color:white">Editar Cliente</h1>
<br>
              <div class="form-group">
                <input type="text" name="username" placeholder="Coloca aqui el username" class="form-control mr-sm-2" value="{{$clientes->username}}"/>
              </div>
              <div class="form-group">
                <input type="text" name="nombre" placeholder="Coloca aqui el nombre" class="form-control mr-sm-2" value="{{$clientes->nombre}}" />
              </div>
              <div class="form-group">
                <input type="text" name="apellidos" placeholder="Coloca aqui el apellidos" class="form-control mr-sm-2" value="{{$clientes->apellidos}}"/>
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Coloca aqui el email" class="form-control mr-sm-2" value="{{$clientes->email}}"/>
              </div>
              <div class="form-group">
                <input type="tel" name="telefono" placeholder="Coloca aqui el telefono" class="form-control mr-sm-2" value="{{$clientes->telefono}}"/>
              </div>
              <div class="form-group">
                <input type="text" name="ciudad" placeholder="Coloca aqui la ciudad" class="form-control mr-sm-2" value="{{$clientes->ciudad}}"/>
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Coloca aqui la password" class="form-control mr-sm-2" value="{{$clientes->password}}"/>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Editar Cliente</button>
                <td><button type="button" class="btn btn-primary"><a style="color:white; text-decoration: none" href="{{url('/clientesTrabajadores')}}">Volver</a></button></td>

              </div>


      </div>
  </div>
</div>



</form>
</body>
</html>