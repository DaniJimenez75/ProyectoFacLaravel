<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <script type="text/javascript" src="../js/bootstrap.js"></script>




</head>
<body>

<form method="POST" action="{{url('/trabajador/agregarCliente')}}">
@csrf

<div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
    <h1 style="text-align:center; color:white">Agregar Cliente</h1>
<br>
              <div class="form-group">
                <input type="text" name="username" placeholder="Coloca aqui el username" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="text" name="nombre" placeholder="Coloca aqui el nombre" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="text" name="apellidos" placeholder="Coloca aqui el apellidos" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Coloca aqui el email" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="tel" name="telefono" placeholder="Coloca aqui el telefono" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="text" name="ciudad" placeholder="Coloca aqui la ciudad" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Coloca aqui la password" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Agregar Cliente</button>
              </div>


      </div>
  </div>
</div>



</form>
</body>
</html>