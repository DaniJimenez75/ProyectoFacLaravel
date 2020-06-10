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

<form method="POST" action="{{url('/facturas/agregarFactura')}}">
@csrf

<div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
    <h1 style="text-align:center; color:white">Agregar Cliente</h1>
<br>
              <div class="form-group">
                <input type="date" name="fecha" placeholder="Coloca aqui la fecha" class="form-control mr-sm-2" required/>
              </div>
              <div class="form-group">
                <input type="text" name="descripcion" placeholder="Coloca aqui la descripcion" class="form-control mr-sm-2" required/>
              </div>
              <div class="form-group">
                <input type="text" name="precio" placeholder="Coloca aqui el precio" class="form-control mr-sm-2" required/>
              </div>
              <div class="form-group">
                <input type="text" name="idCliente" placeholder="Coloca aqui el id del Cliente" class="form-control mr-sm-2" required/>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Agregar Factura</button>
              </div>


      </div>
  </div>
</div>



</form>
</body>
</html>